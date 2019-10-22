<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;

class SearchEngine implements SearchInterface
{
    /**
     * @var SearchResultCombinerInterface
     */
    private $searchResultCombiner;

    public function __construct(SearchResultCombinerInterface $searchResultCombiner)
    {
        $this->searchResultCombiner = $searchResultCombiner;
    }

    /**
     * @param string $query
     * @return array
     */
    public function search(?string $query = null): array
    {
        if ($query === null || $query === '') {
            return [];
        }

        return $this->searchResultCombiner->get($this->getMixedData($query), $query);
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
