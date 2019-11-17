<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder45 extends Seeder
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
                    'title' => 'Оформление детей в детские дошкольные учреждения',
                ],
                'slug'         => '/schoolforkids',
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
                <div>
                    <p style='padding-bottom: 7px'>
                        Для оформления в детские дошкольные учреждения необходимо сдать следующие анализы:
                        <ul>
                            <li>крови</li>
                            <li>мочи</li>
                            <li>кала на яйца глистов</li>
                            <li>кала на кишечную группу</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                        Пройти осмотр врачей-специалистов. Комиссия по оформлению детей в детские дошкольные учреждения 
                        проходит в поликлинике каждый четверг.
                    </p>
                    <p style='padding-bottom: 7px'>
                        <b>Документы можно получить в регистратуре после 17.00</b>
                    </p>
                </div>
            </div>";
    }
}
