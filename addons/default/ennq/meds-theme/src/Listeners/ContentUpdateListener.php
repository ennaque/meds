<?php


namespace Ennq\MedsTheme\Listeners;


use Anomaly\PagesModule\Page\PageModel;
use Anomaly\PostsModule\Post\PostModel;
use Anomaly\Streams\Platform\Entry\Event\EntryWasUpdated;
use Ennq\MedsTheme\Service\Cache;

class ContentUpdateListener
{

    private $cache;

    /**
     * @param Cache $cache
     */
    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * Handle the event.
     *
     * @param EntryWasUpdated $event
     */
    public function handle(EntryWasUpdated $event): void
    {
        $entity = $event->getEntry();
        if ($entity instanceof PageModel || $entity instanceof PostModel) {
            $this->cache->clear();
        }
    }
}
