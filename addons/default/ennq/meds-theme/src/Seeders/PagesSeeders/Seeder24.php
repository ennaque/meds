<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder24 extends Seeder
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
                    'title' => 'Путилковская амбулатория',
                ],
                'slug'         => '/p24',
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
    <div>
        <p style="padding-bottom: 7px">
            <h3>Маршрутизация пациентов амбулатории в д. Путилково.</h3>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/routing-scheme_putilcovo_24.png" class="resizeable" width="800px">
        </p>
    </div>
</div>
';
    }
}
