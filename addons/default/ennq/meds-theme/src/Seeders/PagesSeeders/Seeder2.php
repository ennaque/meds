<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder2 extends Seeder
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
                    'title' => 'Должностные лица',
                ],
                'slug'         => '/contacts',
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
        return '
            <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>ФИО</th>
                        <th>Должность</th>
                        <th>Рабочий телефон</th>
                    </tr>
                </thead>
                <tbody>                    
                    <tr>
                        <td>
                        Винокуров
                        Владимир
                        Геннадьевич
                        </td>
                        <td>
                        Главный врач
                        </td>
                        <td>
                        8 (495) 150-95-64
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Уточкина
                        Ирина
                        Михайловна
                        </td>
                        <td>
                        Заместитель главного врача по медицинской части
                        </td>
                        <td>
                        8 (495) 150-95-64
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Шипунова
                        Татьяна
                        Анатольевна
                        </td>
                        <td>
                        Секретарь главного врача
                        </td>
                        <td>
                        8 (495) 150-95-64
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Зеленская
                        Екатерина
                        Владимировна
                        </td>
                        <td>
                        Секретарь главного врача
                        </td>
                        <td>
                        8 (495) 150-95-64
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Попова
                        Светлана
                        Васильевна
                        </td>
                        <td>
                        Главный бухгалтер
                        </td>
                        <td>
                        8 (499) 444-21-65
                        </td>
                    </tr>                           
                    <tr>
                        <td>
                        Карташова
                        Надежда
                        Марсовна
                        </td>
                        <td>
                        Заместитель главного врача по клинико-экспертной работе
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Силкина
                        Светлана
                        Владимировна
                        </td>
                        <td>
                        Заместитель
                        главного врача
                        по детству
                        </td>
                        <td>
                        
                        </td>
                    </tr>  
                    <tr>
                        <td>
                        Колобущенков
                        Вячеслав
                        Алексеевич
                        </td>
                        <td>
                        Заместитель главного врача по хозяйственным вопросам
                        </td>
                        <td>
                        8 (495) 561-00-17
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Ручкина
                        Юлия
                        Андреевна
                        </td>
                        <td>
                        Заместитель главного врача
                        по хозяйственным работам
                        </td>
                        <td>
                        8 (499) 520-97-54
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Шабанов
                        Максим
                        Викторович
                        </td>
                        <td>
                        Заместитель главного врача
                        по информационно-
                        технологическому обеспечению
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Вахрамеева
                        Юлия
                        Павловна
                        </td>
                        <td>
                        Начальник отдела кадров
                        </td>
                        <td>
                        8 (499) 520-97-84
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Поршакова
                        Оксана
                        Юрьевна
                        </td>
                        <td>
                        Начальник договорного отдела
                        </td>
                        <td>
                        8 (499) 520-97-74
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Панкрухина
                        Ирина
                        Владимировна
                        </td>
                        <td>
                        Начальник отдела гражданской обороны
                        </td>
                        <td>
                        8 (499) 444-21-63
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Мелещенко
                        Федор
                        Павлович
                        </td>
                        <td>
                        Начальник технического отдела
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Арсланова
                        Гульнара
                        Джаудатовна
                        </td>
                        <td>
                        Руководитель отделения
                        платных медицинских услуг
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Ильясова
                        Патимат
                        Нуцалхановна
                        </td>
                        <td>
                        Заведующий детской поликлиникой № 1
                        </td>
                        <td>
                        8 (495) 563-36-49
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Помилуйко
                        Артем
                        Александрович
                        </td>
                        <td>
                        Заведующий детской поликлиникой № 2
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Харитонова
                        Надежда
                        Эдуардовна
                        </td>
                        <td>
                        Заведующий детской поликлиникой № 3
                        </td>
                        <td>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Панкова
                        Надежда
                        Васильевна
                        </td>
                        <td>
                        Заведующий Архангельской
                        врачебной амбулатории
                        </td>
                        <td>
                        8 (498) 569-11-28
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Власенко
                        Маргарита
                        Николаевна
                        </td>
                        <td>
                        Заведующий Путилковской
                        врачебной амбулатории
                        </td>
                        <td>
                        8 (498) 692-10-75
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Вольвовский
                        Антон
                        Германович
                        </td>
                        <td>
                        Заведующий Нахабинской
                        городской больницей
                        </td>
                        <td>
                        8 (495) 566-08-78
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Игнатова
                        Ирина
                        Витальевна
                        </td>
                        <td>
                        Заведующий Опалиховской
                        городской поликлиникой
                        </td>
                        <td>
                        8 (498) 568-73-55
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Бицуева
                        Аида
                        Владимировна
                        </td>
                        <td>
                        Заведующий детским
                        инфекционным отделением
                        </td>
                        <td>
                        8 (495) 563-03-24
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Магамедкеримова
                        Ольга
                        Фезлиддиновна
                        </td>
                        <td>
                        Юрисконсульт
                        </td>
                        <td>
                        8 (499) 444-21-53
                        </td>
                    </tr>
                </tbody>
            </table>';
    }
}
