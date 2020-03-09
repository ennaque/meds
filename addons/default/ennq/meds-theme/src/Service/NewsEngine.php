<?php


namespace Ennq\MedsTheme\Service;


use Anomaly\PostsModule\Post\Contract\PostRepositoryInterface;
use Anomaly\PostsModule\Post\PostModel;
use Ennq\MedsTheme\Lib\PaginatorInterface;
use Ennq\MedsTheme\Lib\SearchEntry;

class NewsEngine
{
    private const NEWS_PATH_SLUG = '/posts/';

    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll(): PaginatorInterface
    {
        $items = $this->postRepository->getLive();
        $paginator = new Paginator($this->format($items), $items->count(), 2);

//        $paginator->setItems($this->format($items));
//        $paginator->setTotal($items->count());


        return $paginator;
    }

    /**
     * @param iterable<PostModel> $posts
     * @return iterable<SearchEntry>
     */
    private function format(iterable $posts): iterable
    {
        /** @var PostModel $postsEntry */
        foreach ($posts as $postsEntry) {
            $resultArray[] = SearchEntry::newInstance(
                $postsEntry->getEntryId(),
                self::NEWS_PATH_SLUG . $postsEntry->getSlug(),
                PostModel::class,
                $postsEntry->content(),
                $postsEntry->getTitle()
            );
        }

        return $resultArray ?? [];
    }
}
