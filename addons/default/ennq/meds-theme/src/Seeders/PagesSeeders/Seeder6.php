<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder6 extends Seeder
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
        $this->pages->truncate();

        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Лицензии ГБУЗ МО «Красногорская городская больница № 2»',
                ],
                'slug'         => '/licenses',
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
            "<div>
                <div class='second-title'>
                    <h2>
                        Лицензии ГБУЗ МО «Красногорская городская больница № 2»
                    </h2>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic1_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic2_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic4_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic3_6.jpg' width='300'>
                </div>
            </div>";
    }
}
