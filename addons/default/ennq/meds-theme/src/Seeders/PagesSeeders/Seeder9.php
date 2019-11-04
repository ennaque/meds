<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder9 extends Seeder
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
                    'title' => 'Перечень препаратов',
                ],
                'slug'         => '/listofdrugs',
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
                        Перечень препаратов
                    </h2>
                </div>
                <div>
                    <p style='padding-bottom: 7px'>
                    Перечень лекарственных средств и изделий медицинского назначения, необходимых для 
                    обеспечения отдельных категорий граждан, отпускаемых при амбулаторном лечении по 
                    рецептам врачей бесплатно или с 50-процентной скидкой со свободных цен.
                    </p>
                    <p style='padding-bottom: 7px'>
                        <a href="/images/stories/lekarka/lgoty.zip">Препараты для льготных категорий (файл для загрузки)</a>
                    </p>
                    <p style='padding-bottom: 7px'>
                        Перечень жизненно необходимых и важнейших лекарственных средств и изделий медицинского назначения, 
                        необходимых для оказания стационарной и скорой медицинской помощи.    
                    </p>
                    <p style='padding-bottom: 7px'>
                        <a href="/images/stories/lekarka/stat.zip">Препараты для стационаров (файл для загрузки)</a>
                    </p>
                    <p style='padding-bottom: 7px'>
                        Перечень жизненно необходимых и важнейших лекарственных препаратов и изделий медицинского назначения, 
                        необходимых для оказания стационарной медицинской помощи, 
                        медицинской помощи в дневных стационарах всех типов, а также скорой и неотложной медицинской помощи.
                    </p>
                    <p style='padding-bottom: 7px'>
                        <a href='/images/stories/lekarka/per_preporat.pdf'>Жизненно необходимые препараты (файл для загрузки)</a>
                    </p>  
                </div>
            </div>";
    }
}