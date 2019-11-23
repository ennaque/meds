<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder21 extends BaseSeeder
{

    public const PAGE_SLUG = '/archangel-disp';

    public static function getTitle(): string
    {
        return 'Арханельская амбулатория.';
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_OLD_SUBDIVISION;
    }

    protected function getContent(): string
    {
        return
            '
<div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/archangeldisp1_21.jpg" class="resizeable" width="800px">
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <b>
                <p style="padding-bottom: 7px">
                    <p>Регистратура Архангельской амбулатории</p>
                    <p><span style="color: red">Телефон - 8 (498) 569-10-19</span></p>
                </p>
                <p style="padding-bottom: 7px">
                    <p>Заведующая амбулаторией</p>
                    <p>Панкова Надежда Васильевна</p>
                    <p><span style="color: red">Телефон - 8 (495) 569-10-16</span></p>
                </p>
            </b>
        </p>
        <p style="padding-bottom: 7px">
            <b>Архангельская амбулатория</b> расположена по адресу Московская область, Красногорский р-н, п. Архангельское, д. 39.
        </p>
    </div>
    <div style="text-align: center; padding-bottom: 20px; padding-top: 20px">
        <a style="font-size: 18px" class="elreg-btn" href="https://uslugi.mosreg.ru/zdrav/?popup=doctor-appointment">
            <b>
                ЗАПИСАТЬСЯ НА ПРИЕМ
            </b>
        </a>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <b>Режим работы Архангельской амбулатории:</b><br>
            понедельник - пятница 08.00 - 14.00<br>
            суббота 09.00 - 15.00<br>
            В субботу вызова на дом производятся до 12.00<br>
            воскресенье выходной
        </p>
    </div>
    <div>
        <h3 style="padding-bottom: 15px; padding-top: 15px">Услуги оказываемые Архангельской амбулаторией:</h3>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th><b>УСЛУГА</b></th>
                    <th><b>МЕТОДЫ ВОССТАНОВИТЕЛЬНОГО ЛЕЧЕНИЯ</b></th>
                    <th><b>НАИМЕНОВАНИЕ</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Физиотерапия</b></td>
                    <td>Электросветолечение</td>
                    <td><ul>
                        <li>Лекарственный электрофарез</li>
                        <li>Магнитотерапия</li>
                        <li>Ультразвуковая терапия</li>
                        <li>Ультравысокочастотная терапия (УВЧ)</li>
                        <li>Ультрафиолетовое облучение</li>
                        <li>Дарсонвализация</li>
                        <li>Амплипульстерапия</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Функциональная диагностика</b></td>
                    <td></td>
                    <td><ul>
                        <li>ЭКГ</li>
                    </ul></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
