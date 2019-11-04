<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder13 extends Seeder
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
                'slug'         => '/p13',
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
            <div style='text-align: center'>
                <img src='/app/default/files-module/local/images/pic_13.jpg' width='800' class='resizeable'>
            </div>
            <p><b>Заведующий отделением</b></p>
            <p><b>Режим работы - круглосуточно</b></p>
            <p>Бицуева Аида Владимировна</p>
            <p style='color: red'>Телефон - 8 (495) 563-03-24</p>
            <p><b>Старшая медицинская сестра</b></p>
            <p>Баева Елена Михайловна</p>
            <p style='color: red'>Телефон - 8 (495)563-03-68</p>
            <div style='text-align: center; padding-bottom: 50px; padding-top: 50px'>
                <a style='font-size: 18px' class='elreg-btn' href='https://uslugi.mosreg.ru/zdrav/?popup=doctor-appointment'>
                    <b>
                        ЗАПИСАТЬСЯ НА ПРИЕМ
                    </b>
                </a>
            </div>
            <h4>Детское инфекционное отделение находится по адресу г.Красногорск, ул. Карбышева, д. 4</h4>
            <p>
                В Детское инфекционное отделение госпитализируются дети до 15 лет, с обязательной госпитализацией
                детей до 1 года. Отделение рассчитано на 60 коек. 50 коек круглосуточного стационара, 10 коек дневного
                пребывания. На 1-ом этаже находятся дети с инфекционной патологией, на 2-ом этаже  - соматические
                заболевания. Детское инфекционное отделение работает в системе обязательного медицинского  страхования.
            </p>
            <h4>При поступлении в отделение родители должны иметь следующие документы:</h4>
            <ul>
                <li>Направление;</li>
                <li>Полис обязательного медицинского страхования ребенка;</li>
                <li>Паспорт родителя, у кого прописан ребенок;</li>
                <li>Свидетельство о рождении.</li>
            </ul>
            <h4>С собой иметь:</h4>
            <ul>
                <li>Термос (2 раза в день буфетчица разливает кипяток);</li>
                <li>Туалетную бумагу;</li>
                <li>Мыло;</li>
                <li>Чашку;</li>
                <li>Столовую и чайную ложку;</li>
                <li>Сменную одежду;</li>
                <li>Индивидуальные смеси для питания;</li>
            </ul>
            <h3 style='padding-top: 30px; padding-bottom: 30px'>Услуги оказываемые на базе Детского инфекционного отделения ГБУЗ МО  КГБ №2</h3>
            <table style=\"width: 100%\" id=\"meds-table\" class=\"table table-striped table-bordered dt-responsive nowrap\">
                <thead>
                    <tr>
                        <th>Услуга</th>
                        <th>Методы восстановительного лечения</th>
                        <th>Нименование</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <b>Общеклинические исследования</b>
                        </td>
                        <td>Исследование мочи</td>
                        <td>
                            <ul>
                                <li>Общий анализ мочи</li>
                                <li>Анализ мочи по Ничепоренко</li>
                                <li>Анализ мочи по Зимницкому</li>
                                <li>Определение глюкозы</li>
                                <li>Определение белка</li>
                                <li>Определение желчных пигментов</li>
                                <li>Определение диастазы в моче</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Исследование кала</td>
                        <td>
                            <ul>
                                <li>Копрологическое исследование</li>
                                <li>Исследование на простейшие</li>
                                <li>Исследование на яйца глист</li>
                                <li>Исследование на энтеробиоз</li>
                                <li>Исследование на стронгилоидоз</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Гематологические исследования</td>
                        <td></td>
                        <td>
                            <ul>
                                <li>Клинический(общий) анализ крови(18 параметров)</li>
                                <li>Определение скорости оседания эритроцитов (СОЭ)</li>
                                <li>Определение осмотической резистентности эритроцитов</li>
                                <li>Взятие крови из пальца для определения протромбинового индекса (МНО, ПО)</li>
                                <li>Взятие крови из пальца для определения протромбинового индекса (МНО, ПО)</li>
                                <li>Определения протромбинового индекса</li>
                                <li>Взятие и определение времени свертывания цельной крови</li>
                                <li>Взятие крови для исследования на малярийные паразиты</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Биохимические исследования</td>
                        <td></td>
                        <td>
                            Определение глюкозы в цельной крови
                        </td>
                    </tr>
                    <tr>
                        <td>Узи</td>
                        <td>Ультра звуковая диагностика</td>
                        <td>
                            <ul>
                                <li>Брюшной полости</li>
                                <li>Женских органов</li>
                                <li>Надпочечников, почек м/в путей</li>
                                <li>Предстательной железы</li>
                                <li>Молочной железы</li>
                                <li>Щитовидной железы</li>
                                <li>Костно-суставной системы</li>
                                <li>Мягких тканей</li>
                                <li>Головного мозга</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>Функциональная диагностика</td>
                        <td></td>
                        <td>
                            Экг
                        </td>
                    </tr>
                </tbody>
            </table>";
    }
}
