<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PagesModule\Page\PageRepository;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\PaginatorInterface;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultFormatterInterface;
use stdClass;

class SearchEngine implements SearchInterface
{
    /** @var SearchResultFormatterInterface */
    private $searchResultFormatter;
    /** @var PageRepository */
    private $pageRepo;
    /** @var PostRepository */
    private $postRepo;

    public function __construct(
        SearchResultFormatterInterface $searchResultFormatter,
        PageRepository $pageRepository,
        PostRepository $postRepository
    ) {
        $this->searchResultFormatter = $searchResultFormatter;
        $this->pageRepo = $pageRepository;
        $this->postRepo = $postRepository;
    }

    /**
     * @param string $searchRequest
     * @return Paginator<SearchEntry>
     */
    public function paginate(string $searchRequest = null): PaginatorInterface
    {
        if (null === $searchRequest || '' === $searchRequest) {
            return new Paginator([]);
        }

        $pagesCount = $this->pageRepo->countByNeedle($searchRequest)->total;
        $postsCount = $this->postRepo->countByNeedle($searchRequest)->total;

        $paginator = new Paginator([], $pagesCount + $postsCount);

        $searchResults = $this->getCombinedSearchResult(
            $searchRequest,
            $pagesCount,
            $postsCount,
            $paginator->getCurrentPageIndex(),
            $paginator->getPerPage()
        );

        $formattedSearchResults = $this->searchResultFormatter->get($searchResults, $searchRequest);

        return $paginator->setItems($formattedSearchResults);
    }

    /**
     * @param string $needle
     * @param int $pages
     * @param int $posts
     * @param int $paginationPage
     * @param int $perPage
     * @return array
     */
    private function getCombinedSearchResult(
        string $needle,
        int $pages,
        int $posts,
        int $paginationPage,
        int $perPage
    ): array
    {
        $offset = ($paginationPage - 1) * $perPage;

        if (!$pages && $posts) {
            return $this->combineFromStd(
                [],
                $this->postRepo->searchLikeContentOrTitle($needle, $offset, $perPage)
            );
        }
        if (!$posts && $pages) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, $offset, $perPage),
                []
            );
        }
        if (0 === $offset) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, 0, $perPage),
                []
            );
        }
        if ($pages >= $offset + $perPage) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, $offset, $perPage),
                []
            );
        }
        if (($pagesRest = ($pages - $offset)) > 0) {
            return $this->combineFromStd(
                $this->pageRepo->searchLikeContentOrTitle($needle, $offset, $pagesRest),
                $this->postRepo->searchLikeContentOrTitle($needle, 0, $perPage - $pagesRest)
            );
        }

        return $this->combineFromStd(
            [],
            $this->postRepo->searchLikeContentOrTitle($needle, $offset - $pages, $perPage)
        );
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
