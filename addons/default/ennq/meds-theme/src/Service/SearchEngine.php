<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PagesModule\Page\PageRepository;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class SearchEngine implements SearchInterface
{
    private const SEARCH_KEY = 'query';

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

        $data = $this->searchResultCombiner->get($this->getMixedData($searchRequest), $searchRequest, 14);

        dump($data);

        return new Paginator($data);
    }

    public function search(Request $request, ?int $limit = null): array
    {
        $data = DB::table('pages_default_pages_translations')
            ->where('content', 'LIKE', '%' . $request->get(self::SEARCH_KEY) . '%')
            ->join('pages_pages', 'pages_default_pages_translations.entry_id', '=', 'pages_pages.id')
            ->join('pages_pages_translations', 'pages_default_pages_translations.entry_id', '=', 'pages_pages_translations.entry_id')
            ->get();
        $data2 = DB::table('pages_pages_translations')
            ->where('title', 'LIKE', '%' . $request->get(self::SEARCH_KEY) . '%')
            ->join('pages_pages', 'pages_pages_translations.entry_id', '=', 'pages_pages.id')
            ->join('pages_default_pages_translations', 'pages_pages_translations.entry_id', '=', 'pages_default_pages_translations.entry_id')
            ->get();

        $this->combine($data, $data2);

        return [];
    }

    private function combine(Collection $data, Collection $data2)
    {
        $res = [];
        foreach ($data as $item) {
            $this->attach($res, $item->entry_id, $item->content, $item->path, $item->title);
        }
        foreach ($data2 as $item) {
            $this->attach($res, $item->entry_id, $item->content, $item->path, $item->title);
        }
        dump($res);
    }

    private function attach(array &$arr, $id = null, $content = null, $path = null, $title = null)
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
