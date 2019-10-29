<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PagesModule\Page\PageRepository;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\PostsModule\Post\PostRepository;
use Ennq\MedsTheme\Lib\SearchEntry;
use Ennq\MedsTheme\Lib\SearchInterface;
use Ennq\MedsTheme\Lib\SearchResultCombinerInterface;
use stdClass;

class SearchEngine implements SearchInterface
{
    /** @var SearchResultCombinerInterface */
    private $searchResultCombiner;
    /** @var PageRepository */
    private $pageRepo;
    /** @var PostRepository */
    private $postRepo;

    public function __construct(
        SearchResultCombinerInterface $searchResultCombiner,
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
    public function paginate(string $searchRequest): Paginator
    {
        if (null === $searchRequest || '' === $searchRequest) {
            return new Paginator([]);
        }

//        $data = $this->searchResultCombiner->get(
//            $this->getMixedData($searchRequest),
//            $searchRequest,
//            14
//        );

        $pagesEntries = $this->pageRepo->search($searchRequest)->get();
        $postsEntries = $this->postRepo->search($searchRequest)->get();

        return new Paginator($this->combineFromModel($pagesEntries, $postsEntries));
    }


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
//        !!! IMPORTANT SHIT !!!
//        It needs creating fulltext index for title and content fields.
        $pagesContentTitleData = $this->pageRepo->searchLikeContentOrTitle($searchRequest);
        $postsContentTitleData = $this->postRepo->searchLikeContentOrTitle($searchRequest);

        $resData = $this->combineFromStd($pagesContentTitleData, $postsContentTitleData);

        return array_slice($resData, 0, $limit);
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

    /**
     * @param iterable<PageModel> $pages
     * @param iterable<PostModel> $posts
     * @return array<SearchEntry>
     */
    private function combineFromModel(iterable $pages, iterable $posts): array
    {
        /** @var PageModel $pagesEntry */
        foreach ($pages as $pagesEntry) {
            $resultArray[] = SearchEntry::newInstance(
                $pagesEntry->getId(),
                $pagesEntry->getPath(),
                PageModel::class,
                $pagesEntry->content(),
                $pagesEntry->getTitle()
            );
        }
        /** @var PostModel $postsEntry */
        foreach ($posts as $postsEntry) {
            $resultArray[] = SearchEntry::newInstance(
                $postsEntry->getId(),
                PostModel::URL_SLUG . $postsEntry->getSlug(),
                PostModel::class,
                $postsEntry->content(),
                $postsEntry->getTitle()
            );
        }

        return $resultArray ?? [];
    }
}
