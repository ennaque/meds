<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder3 extends Seeder
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
    public function run(): void
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Главный врач',
                ],
                'slug'         => '/headphysician',
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
                        Главный врач
                    </h2>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/gv1_3.jpg' width='400'>
                </div>
                <div>
                    <p style='padding-bottom: 7px; font-weight: bold'>
                        График приема посетителей:
                    </p>
                    <p style='padding-bottom: 7px'>
                        Понедельник 15.00-17.00
                    </p>
                </div>    
            </div>";
    }
}
