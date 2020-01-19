<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder22 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Путилковская амбулатория';
    }

    public static function getSlug(): string
    {
        return '/putilkov-disp';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DISPENSARY;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <div>
        <p style="padding-bottom: 7px">
            <h3>В Путилковскую амбулаторию требуется врач общей практики. Жилье предоставляется, зарплата 70 000 т.р., возможность участвовать в программе земский доктор.</h3>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/photos1_22.jpg" class="resizeable" width="800px">
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <p style="padding-bottom: 7px">
                <p style="padding-bottom: 7px"><b>Регистратура Путилковской амбулатории</b></p>
                <p><b>Режим работы амбулатории:</b></p>
                <p>Понедельник-Пятница: с 8:00 до 14:00</p>
                <p>Суббота: с 9:00 до 15:00</p>
                <p>В субботу вызова на дом производятся до 12:00</p>
                <p>Воскресенье: выходной</p>
                <p><span style="color: red">Телефон - 8 (498) 692-10-60</span></p>
            </p>
            <p style="padding-bottom: 7px">
                <p><b>Заведующая Путилковской амбулаторией</b></p>
                <p>Власенко Маргарита Николаевна</p>
                <p><span style="color: red">Телефон - 8 (498) 692-10-75; 8 (498) 692-10-53</span></p>
            </p>
            <p style="padding-bottom: 7px">
                <p><b>Открылся:</b></p>
                <p><b>Фельдшерско-акушерский пункт</b></p>
                <p><b>д.Гаврилково ЖК ЭДЕМ</b></p>
            </p>
        </p>
        <p style="padding-bottom: 7px">
            <b>Путилковская амбулатория</b> расположена по адресу Московская область, Красногорский р-н, п. Путилково, д. 11.
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
        <h3 style="padding-bottom: 15px; padding-top: 15px">
            Услуги, оказываемые Путилковской амбулаторией:
        </h3>
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
                        <li>Ультразвуковая терапия</li>
                        <li>Магнитотерапия</li>
                        <li>Амплипульстерапия</li>
                        <li>Лекарственный электрофарез</li>
                        <li>Ультравысокочастотная терапия (УВЧ)</li>
                        <li>Вибрационно-механический массаж мышечно-связанного аппарата позвоночника от аппарата "Ормед-Релакс"</li>
                    </ul></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Аэрозольтерапия</td>
                    <td><ul>
                        <li>Ингаляции небулайзерные</li>
                        <li>Галоингаляции индивидуальные от аппарата "Галонеб"</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Функциональная диагностика</b></td>
                    <td></td>
                    <td><ul>
                        <li>Электрокардиограмма (ЭКГ)</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Общеклинические исследования</b></td>
                    <td>Исследование мочи</td>
                    <td><ul>
                        <li>Общий анализ мочи
                        <li>Анализ мочи по Ничепоренко</li>
                        <li>Анализ мочи по Зимницкому</li>
                        <li>Определение глюкозы</li>
                        <li>Определение белка</li>
                        <li>Определение желчных пигментов</li>
                        <li>Определение диастазы в моче</li>
                    </ul></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Исследование кала</td>
                    <td><ul>
                        <li>Копрологическое исследование</li>
                        <li>Исследование на простейшие</li>
                        <li>Исследование на яйца глист</li>
                        <li>Исследование на энтробиоз</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Гематологические исследования</b></td>
                    <td></td>
                    <td><ul>
                        <li>Клинический (общий) анализ крови по 18 параметрам</li>
                        <li>Определение скорости оседания эритроцитов (СОЭ)</li>
                        <li>Подсчёт лейкоцитарной формулы</li>
                        <li>Определение глюкозы в крови</li>
                        <li>Определение протромбинового индекса</li>
                        <li>Определение времени кровотечения</li>
                        <li>Определение времени свёртывания цельной крови</li>
                        <li>Исследование крови на малярийные паразиты</li>
                    </ul></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
