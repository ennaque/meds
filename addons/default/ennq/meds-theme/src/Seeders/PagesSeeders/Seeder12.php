<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder12 extends Seeder
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
                    'title' => 'Еединый центр телефонных звонков',
                ],
                'slug'         => '/p12',
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
        return "
            <h3>
                ГБУЗ МО «КГБ № 2» требуются :
            </h3>
            <ul>
                <li>врач-педиатр (возможность участвовать в социальной ипотеке)</li>
                <li>заведующая педиатрическим отделением</li>
                <li>медицинские сестры</li>
            </ul>
            <h3>
                Врачи специалисты :
            </h3>
            <ul>
                <li>отоларинголог</li>
                <li>офтальмолог</li>
                <li>травматолог</li>
                <li>детский хирург</li>
                <li>детский эндокринолог</li>
            </ul>
            <h3>По вопросам трудоустройства звонить по телефону : 8(495)-561-00-27</h3>
            <div style='text-align: center'>
                <img src='/app/default/files-module/local/images/pic_12.png' width='800' class='resizeable'>
            </div>
            <div style='text-align: center; padding-bottom: 50px; padding-top: 50px'>
                <a style='font-size: 18px' class='elreg-btn' href='https://uslugi.mosreg.ru/zdrav/?popup=doctor-appointment'>
                    <b>
                        ЗАПИСАТЬСЯ НА ОБСЛЕДОВАНИЕ
                    </b>
                </a>
            </div>
            <p>Режим работы подразделения \"Детская поликлиника № 3\" с 8.00 до 20.00 часов</p>
            <p style='color: red'>Телефон - 8 (498) 786-15-57</p>
            <p><b>Заведующая Детской поликлиники №3</b></p>
            <p><b>Астраханцева Екатерина Владимировна</b></p>
            <p><b style='padding-top: 10px'>Заместитель главного врача педиатрии</b></p>
            <p><b>Силкина Светлана Владимировна</b></p>
        ";
    }
}
