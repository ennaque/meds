<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder17 extends Seeder
{
    /**
     * The page repository.
     *
     * @var PageRepositoryInterface
     */
    protected $pages;

    /**
     * The types repository.
     *
     * @var TypeRepositoryInterface
     */
    protected $types;

    /**
     * Create a new PageSeeder instance.
     *
     * @param PageRepositoryInterface $pages
     * @param TypeRepositoryInterface $types
     */
    public function __construct(PageRepositoryInterface $pages, TypeRepositoryInterface $types)
    {
        parent::__construct();
        $this->pages = $pages;
        $this->types = $types;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Взрослая поликлиника №2',
                ],
                'slug'         => '/oldclinic2',
                'entry'        => $type->getEntryModel()->create(
                    [
                        'ru' => [
                            'content' => $content,
                        ]
                    ]
                ),
                'type'         => $type,
                'enabled'      => true,
                'theme_layout' => 'theme::layouts/default.twig',
            ]
        )->allowedRoles()->sync([]);
    }

    private function getContent(): string
    {
        return
'
<div>
    <h1>
        СТРАНИЦА НАХОДИТСЯ В РАЗРАБОТКЕ
    </h1>
    <div>
        <p style="padding-bottom: 7px">
            <img src="https://downloader.disk.yandex.ru/preview/deb2d4bb7d678e6c43724a596a1c28c4607a35beb70e226a97ed0d7cb0266688/5dbe456b/E9EwU3JaIYg3fpJ8vF224ZlWjnpyd8qh2TqJRweU0IZCiYXeMNus8bkSUJccKGKJxDYtVZnT0tZFOYz59jPrTQ==?uid=0&filename=1444707235.jpg&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&tknv=v2&owner_uid=110934414&size=2048x2048" class="resizeable" width="800px">
        </p>
    </div>
</div>
';
    }
}
