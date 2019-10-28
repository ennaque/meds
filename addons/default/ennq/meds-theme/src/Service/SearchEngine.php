<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PostsModule\Post\PostModel;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class SearchEngine implements SearchInterface
{
    private const SEARCH_KEY = 'query';
    public const ASYNC_SEARCH_RESULTS = 50;

    /**
     * @var SearchResultCombinerInterface
     */
    private $searchResultCombiner;

    public function __construct(SearchResultCombinerInterface $searchResultCombiner)
    {
        $this->searchResultCombiner = $searchResultCombiner;
    }

    /**
     * @param Request|null $request
     * @return Paginator
     */
    public function paginate(Request $request): Paginator
    {
        $searchRequest = $request->get(self::SEARCH_KEY);
        if (null === $searchRequest || '' === $searchRequest) {
            return new Paginator([]);
        }

        $data = $this->searchResultCombiner->get(
            $this->getMixedData($searchRequest),
            $searchRequest,
            14
        );

        dump($data);

        return new Paginator($data);
    }

    //TODO: fix empty query search, now emits some data

    public function search(Request $request, ?int $limit = null): array
    {
        /*
        !!! IMPORTANT SHIT !!!
        It needs creating fulltext index for title and content fields.
        So, there has to will be a seeder or anything like that creating the index. In general, i don't know how to do that right without crashing down CMS and myself.
        Otherwise, the search will most likely be slow (but it's not exactly).

        Example queries:
            to create the index when creating table:
                CREATE TABLE table_name(id INT PRIMARY KEY, content_field TEXT, FULLTEXT (content_field));
            to create the index when the table is already exists:
                ALTER TABLE table_name ADD FULLTEXT optional_index_name (content_field);
        */

        // The MATCH/AGAINST construction is a standart MySQL solution for the fulltext morphological search. Works with MyISAM table engine.
        // Some people say that the best way for the fulltext search in MySQL is Sphinx. But it requires additional installation and integration.
        $pagesContentTitleData = DB::select('SELECT * FROM `default_pages_pages`
JOIN `default_pages_default_pages_translations`
ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages`.`id`
JOIN `default_pages_pages_translations`
ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages_translations`.`entry_id`
WHERE MATCH(`default_pages_default_pages_translations`.`content`) AGAINST("' . $request->get(self::SEARCH_KEY) . '" IN BOOLEAN MODE) OR
MATCH(`default_pages_pages_translations`.`title`) AGAINST("' . $request->get(self::SEARCH_KEY) . '" IN BOOLEAN MODE);');
        $postsContentTitleData = DB::select('SELECT * FROM `default_posts_posts`
JOIN `default_posts_default_posts_translations`
ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts`.`id`
JOIN `default_posts_posts_translations`
ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts_translations`.`entry_id`
WHERE MATCH(`default_posts_default_posts_translations`.`content`)
AGAINST("' . $request->get(self::SEARCH_KEY) . '" IN BOOLEAN MODE) OR
MATCH(`default_posts_posts_translations`.`title`)
AGAINST("' . $request->get(self::SEARCH_KEY) . '" IN BOOLEAN MODE);');

        $resData = array_merge($pagesContentTitleData, $postsContentTitleData);

        return array_slice($resData, 0, self::ASYNC_SEARCH_RESULTS);
    }

    private function combine(Collection $data, Collection $data2, bool $isPosts = false): array
    {
        $res = [];
        foreach ($data as $item) {
            $linkField = !$isPosts ? $item->path : '/posts/' . $item->slug;
            $this->attach($res, $item->entry_id, $item->content, $linkField, $item->title);
        }
        foreach ($data2 as $item) {
            $linkField = !$isPosts ? $item->path : '/posts/' . $item->slug;
            $this->attach($res, $item->entry_id, $item->content, $linkField, $item->title);
        }

        return $res;
    }

    private function attach(array &$arr, $id = null, $content = null, $path = null, $title = null): void
    {
        if (!isset($arr[$id])) {
            $arr[$id] = (new SearchEntry())->setId((int)$id);
        }
        /** @var SearchEntry $entry */
        $entry = $arr[$id];
        null !== $id ? $entry->setId((int)$id) : null;
        null !== $content ? $entry->setContent($content) : null;
        null !== $path ? $entry->setLink($path) : null;
        null !== $title ? $entry->setTitle($title) : null;
    }

    /**
     * @param string $query
     * @return array<SearchEntry>
     */
    private function getMixedData(string $query): array
    {
        $pagesEntries = PageModel::search($query)->get();
        $postsEntries = PostModel::search($query)->get();

        /** @var PageModel $pagesEntry */
        foreach ($pagesEntries as $pagesEntry) {
            $resultArray[] = $this->getSearchEntry(
                $pagesEntry->getId(),
                $pagesEntry->getPath(),
                PageModel::class,
                $pagesEntry->content(),
                $pagesEntry->getTitle()
            );
        }
        /** @var PostModel $postsEntry */
        foreach ($postsEntries as $postsEntry) {
            $resultArray[] = $this->getSearchEntry(
                $postsEntry->getId(),
                PostModel::URL_SLUG . $postsEntry->getSlug(),
                PostModel::class,
                $postsEntry->content(),
                $postsEntry->getTitle()
            );
        }

        return $resultArray ?? [];
    }

    /**
     * @param int $id
     * @param string $link
     * @param string $entryClass
     * @param string $content
     * @param string $title
     * @return SearchEntry
     */
    private function getSearchEntry(
        ?int $id,
        string $link,
        string $entryClass,
        ?string $content,
        ?string $title
    ): SearchEntry
    {
        return (new SearchEntry())
            ->setId($id)
            ->setContent($content)
            ->setTitle($title)
            ->setEntryClass($entryClass)
            ->setLink($link);
    }
}
