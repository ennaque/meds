<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PagesModule\Page\PageRepository;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultFormatterInterface;
use stdClass;

class SearchEngine implements SearchInterface
{
    /** @var SearchResultFormatterInterface */
    private $searchResultCombiner;
    /** @var PageRepository */
    private $pageRepo;
    /** @var PostRepository */
    private $postRepo;

    public function __construct(
        SearchResultFormatterInterface $searchResultCombiner,
        PageRepository $pageRepository,
        PostRepository $postRepository
    )
    {
        $this->searchResultCombiner = $searchResultCombiner;
        $this->pageRepo = $pageRepository;
        $this->postRepo = $postRepository;
    }

    /**
     * @param string $searchRequest
     * @return Paginator<SearchEntry>
     */
    public function paginate(string $searchRequest = null): Paginator
    {
        if (null === $searchRequest || '' === $searchRequest) {
            return new Paginator([]);
        }

        $pagesCount = $this->pageRepo->countByNeedle($searchRequest)->total;
        $postsCount = $this->postRepo->countByNeedle($searchRequest)->total;

        $paginator = new Paginator([], $pagesCount + $postsCount);

        $searchResults = $this->getSearchResults($searchRequest, $pagesCount, $postsCount, $paginator->getPaginationLength());

        $formattedSearchResults = $this->searchResultCombiner->get($searchResults, $searchRequest);

        return $paginator->setItems($formattedSearchResults);
    }

    private function getSearchResults(string $needle, int $pages, int $posts, int $paginationPage)
    {
        $offset = ($paginationPage - 1) * 10;
        if (!$pages && $posts) {
            return $this->combineFromStd(
                [],
                $this->postRepo->searchLikeContentOrTitle($needle, $offset, 10)
            );
        }
        if (!$posts && $pages) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, $offset, 10),
                []
            );
        }
        if (0 === $offset) {
            return $this->combineFromStd(
                $this->postRepo->searchLikeContentOrTitle($needle, 0, 10),
                $this->pageRepo->searchLikeContentOrTitle($needle, 0, 10)
            );
        }
        if ($pages >= $offset + 10) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, $offset, 10),
                []
            );
        }

        $pagesOffset = $pages - $offset;
        $postsOffset = 10 - $pagesOffset;

        if ($pagesOffset < 0) {
            $postsOffset = $offset - $pages;
        }

        return $this->combineFromStd(
            $this->postRepo->searchLikeContentOrTitle($needle, $postsOffset, 10),
            $this->pageRepo->searchLikeContentOrTitle($needle, $pagesOffset, 10)
        );
    }

    ///     3 page - offset 20
    ///     12 pages
    ///     30 posts
    ///
    ///     1page: 10 pages(0, 10) 0 posts
    ///     2page: 2(10, 12) pages 8(0, 8) posts
    ///     3page: 0 pages 10(8, 18) posts
    ///

    /**
     * @param string $searchRequest
     * @param int|null $limit
     * @return array<SearchEntry>
     */
    public function search(string $searchRequest, ?int $limit = 10): array
    {
        if (null === $searchRequest || '' === $searchRequest) {
            return [];
        }

        $result = $this->getCombinedSearchResult($searchRequest);

        return array_slice($result, 0, $limit);
    }

    /**
     * @param string $searchRequest
     * @return array
     */
    private function getCombinedSearchResult(string $searchRequest): array
    {
        $pagesContentTitleData = $this->pageRepo->searchLikeContentOrTitle($searchRequest);
        $postsContentTitleData = $this->postRepo->searchLikeContentOrTitle($searchRequest);

        return $this->combineFromStd($pagesContentTitleData, $postsContentTitleData);
    }

    /**
     * @param iterable<StdClass> $pages
     * @param iterable<StdClass> $posts
     * @return array<SearchEntry>
     */
    private function combineFromStd(iterable $pages, iterable $posts): array
    {
        foreach ($pages as $pagesEntry) {
            $resultArray[] = SearchEntry::newInstance(
                $pagesEntry->id,
                $pagesEntry->path,
                PageModel::class,
                $pagesEntry->content,
                $pagesEntry->title
            );
        }
        foreach ($posts as $postsEntry) {
            $resultArray[] = SearchEntry::newInstance(
                $postsEntry->id,
                PostModel::URL_SLUG . $postsEntry->slug,
                PostModel::class,
                $postsEntry->content,
                $postsEntry->title
            );
        }

        return $resultArray ?? [];
    }
}
