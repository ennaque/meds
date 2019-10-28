<?php namespace Anomaly\PagesModule\Page;

use Anomaly\PagesModule\Page\Command\RemoveRestrictedPages;
use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Builder;

/**
 * Class PageRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class PageRepository extends EntryRepository implements PageRepositoryInterface
{

    use DispatchesJobs;

    /**
     * The page model.
     *
     * @var PageModel
     */
    protected $model;

    /**
     * Create a new PageRepositoryInterface instance.
     *
     * @param PageModel $model
     */
    public function __construct(PageModel $model)
    {
        $this->model = $model;
    }

    /**
     * Return only routable pages.
     *
     * @return PageCollection
     */
    public function routable()
    {
        return $this->model
            ->newQueryWithoutRelationships()
            ->where('exact', false)
            ->get();
    }

    /**
     * Return only accessible pages.
     *
     * @return PageCollection
     */
    public function accessible()
    {
        return $this->dispatch(new RemoveRestrictedPages($this->all()));
    }

    /**
     * Unset home pages.
     *
     * @param PageInterface $home
     * @return void
     */
    public function unsetHomePages(PageInterface $home)
    {
        $this->model
            ->where('id', '!=', $home->getId())
            ->update(['home' => false]);
    }

    /**
     * Find a page by it's string ID.
     *
     * @param $id
     * @return null|PageInterface
     */
    public function findByStrId($id)
    {
        return $this->model->where('str_id', $id)->first();
    }

    /**
     * Find a page by it's path.
     *
     * @param $path
     * @return PageInterface|null
     */
    public function findByPath($path)
    {
        return $this->model->where('path', $path)->first();
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
                SELECT * FROM `default_pages_pages`
                    JOIN `default_pages_default_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages`.`id`
                    JOIN `default_pages_pages_translations`
                        ON `default_pages_default_pages_translations`.`entry_id` = `default_pages_pages_translations`.`entry_id`
                WHERE 
                    MATCH(`default_pages_default_pages_translations`.`content`) AGAINST("' . $needle . '" IN BOOLEAN MODE) 
                OR
                    MATCH(`default_pages_pages_translations`.`title`) AGAINST("' . $needle . '" IN BOOLEAN MODE);
                ');
    }
}
