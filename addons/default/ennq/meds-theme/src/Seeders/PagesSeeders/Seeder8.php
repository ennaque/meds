<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder8 extends BaseSeeder
{

    public const PAGE_SLUG = '/charter';
    public const PAGE_TITLE = 'Тер. управление №9';

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_MAIN;
    }

    public static function getTitle(): string
    {
        return self::PAGE_TITLE;
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    protected function getContent(): string
    {
        return '
        <div class="second-title">
        <h2>
        УПРАВЛЕНИЕ КООРДИНАЦИИ ДЕЯТЕЛЬНОСТИ МЕДИЦИНСКИХ И ФАРМАЦЕВТИЧЕСКИХ ОРГАНИЗАЦИЙ №9
        МИНИСТЕРСТВА ЗДРАВООХРАНЕНИЯ МОСКОВСКОЙ ОБЛАСТИ
        </h2>
        </div>
        <div>
            <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Наименование должности</th>
                        <th>Ф.И.О.</th>
                        <th>Тел. рабочий</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Нач. управления №9
                        </td>
                        <td>
                            Соболев Андрей Валентинович
                        </td>
                        <td>
                            8 (985) 969-11-71
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">
                            <b>Отдел контроля организации медицинской 
                            <wbr>помощи и реализации программных мероприятий</b>
                        </td>
                        <td style="display: none;"></td>
                        <td style="display: none;"></td>
                    </tr>
                    <tr>
                        <td>
                            Зам. нач. Управления – заведующий отделом в Управлении
                        </td>
                        <td>
                            Зеленский Алексей Александрович
                        </td>
                        <td>
                            8 (495) 562-13-24
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Консультант (лек. обеспеч)
                        </td>
                        <td>
                            Горчилина Любовь Дмитриевна
                        </td>
                        <td>
                            8 (498) 568-18-80
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный специалист (лекарственное обеспечение)
                        </td>
                        <td>
                            Остафийчук Екатерина Анатольевна
                        </td>
                        <td>
                            8 (498) 568-18-80
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный аналитик
                        </td>
                        <td>
                            Феофанова Елена Сергеевна
                        </td>
                        <td>
                            8 (498) 568-18-08
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный аналитик
                        </td>
                        <td>
                            Захаренко Ирина Николаевна
                        </td>
                        <td>
                            8 (498) 568-18-08
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center">
                            <b>Отдел анализа и мониторинга деятельности</b>
                        </td>
                        <td style="display: none;"></td>
                        <td style="display: none;"></td>
                    </tr>
                    <tr>
                        <td>
                            Заведующий отделом в Управлении
                        </td>
                        <td>
                            Шеремет Оксана Николаевна
                        </td>
                        <td>
                            8 (495) 562-02-59
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Заместитель заведующего отделом в Управлении
                        </td>
                        <td>
                            Шагаева Светлана Владимировна
                        </td>
                        <td>
                            8 (498) 568-16-56
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный аналитик
                        </td>
                        <td>
                            Саницкая Виктория Александровна
                        </td>
                        <td>
                            8 (498) 568-16-56
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный аналитик
                        </td>
                        <td>
                            Одинцова Юлия Александровна
                        </td>
                        <td>
                            8 (495) 562-02-59
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Главный специалист
                        </td>
                        <td>
                            Стрельникова Мария Владимировна
                        </td>
                        <td>
                            8 (498) 568-16-56
                        </td>
                    </tr>                    
                </tbody>
            </table>
            </div>';
    }
}
