<?php namespace Anomaly\PostsModule\Post;

use Anomaly\PostsModule\Category\Contract\CategoryInterface;
use Anomaly\PostsModule\Post\Contract\PostInterface;
use Anomaly\PostsModule\Post\Contract\PostRepositoryInterface;
use Anomaly\PostsModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Builder;

/**
 * Class PostRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class PostRepository extends EntryRepository implements PostRepositoryInterface
{

    /**
     * The post model.
     *
     * @var PostModel
     */
    protected $model;

    /**
     * Create a new PostRepository instance.
     *
     * @param PostModel $model
     */
    public function __construct(PostModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a post by it's string ID.
     *
     * @param $id
     * @return null|PostInterface
     */
    public function findByStrId($id)
    {
        return $this->model->where('str_id', $id)->first();
    }

    /**
     * Find a post by it's slug.
     *
     * @param $post
     * @return null|PostInterface
     */
    public function findBySlug($slug)
    {
        return $this->model->orderBy('created_at', 'DESC')->where('slug', $slug)->first();
    }

    /**
     * Find man posts by tag.
     *
     * @param                  $tag
     * @param  null            $limit
     * @return EntryCollection
     */
    public function findManyByTag($tag, $limit = null)
    {
        return $this->model
            ->live()
            ->where('tags', 'LIKE', '%"' . $tag . '"%')
            ->paginate($limit);
    }

    /**
     * Find many posts by category.
     *
     * @param  CategoryInterface $category
     * @param  null              $limit
     * @return EntryCollection
     */
    public function findManyByCategory(CategoryInterface $category, $limit = null)
    {
        return $this->model
            ->live()
            ->where('category_id', $category->getId())
            ->paginate($limit);
    }

    /**
     * Find many posts by type.
     *
     * @param  TypeInterface $type
     * @param  null          $limit
     * @return PostCollection
     */
    public function findManyByType(TypeInterface $type, $limit = null)
    {
        return $this->model
            ->live()
            ->where('type_id', $type->getId())
            ->paginate($limit);
    }

    /**
     * Find many posts by date.
     *
     * @param                 $year
     * @param                 $month
     * @param  null           $limit
     * @return PostCollection
     */
    public function findManyByDate($year, $month, $limit = null)
    {
        $query = $this->model
            ->live()
            ->whereYear('publish_at', '=', $year);

        if ($month) {
            $query->whereMonth('publish_at', '=', $month);
        }

        return $query->paginate($limit);
    }

    /**
     * Get recent posts.
     *
     * @return EntryCollection
     */
    public function getRecent($limit = null)
    {
        return $this->model
            ->live()
            ->paginate($limit);
    }

    /**
     * Get featured posts.
     *
     * @return EntryCollection
     */
    public function getFeatured($limit = null)
    {
        return $this->model
            ->where('enabled', true)
            ->where('featured', true)
            ->paginate($limit);
    }

    /**
     * Get live posts.
     *
     * @return PostCollection
     */
    public function getLive()
    {
        return $this->model
            ->live()
            ->get();
    }

    /**
     * @param string $needle
     * @return Builder
     */
    public function search(string $needle): Builder
    {
        return $this->model::search($needle);
    }

    /**
     * @param string $needle
     * @return mixed
     */
    public function searchLikeContentOrTitle(string $needle)
    {
        return DB::select('
            SELECT * FROM `default_posts_posts`
                JOIN `default_posts_default_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts`.`id`
                JOIN `default_posts_posts_translations`
                    ON `default_posts_default_posts_translations`.`entry_id` = `default_posts_posts_translations`.`entry_id`
                WHERE 
                    MATCH(`default_posts_default_posts_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE) 
                OR
                    MATCH(`default_posts_posts_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE);
                    ');
    }
}
