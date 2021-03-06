<?php

namespace  Ennq\MedsTheme\Seeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;


/**
 * to seed this example data run php artisan db:seed --addon=ennq.theme.meds
 * default_pages_pages table contains new pages system info
 * default_pages_default_pages_translations table contains content
 *
 * Class ExampleSeeder
 * @package Ennq\MedsTheme\Seeders
 */
class ExampleSeeder extends Seeder
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


        for ($i = 0; $i < 26; $i ++) {
            $this->pages->create(
                [
                    'en'           => [
                        'title' => 'ЕУЫЕЫУЕЫУЕ',
                    ],
                    'slug'         => 'testPageSlug' . $i,
                    'entry'        => $type->getEntryModel()->create(
                        [
                            'en' => [
                                'content' => '<h1>TEST LOOP TEST LOOP TEST LOOP TESTLOOP</h1> ',
                            ],
                        ]
                    ),
                    'type'         => $type,
                    'enabled'      => true,
                    'theme_layout' => 'theme::layouts/default.twig',
                ]
            )->allowedRoles()->sync([]);
        }
    }
}
