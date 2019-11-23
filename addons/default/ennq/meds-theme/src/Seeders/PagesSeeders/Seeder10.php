<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;



use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder10 extends BaseSeeder
{

    public const PAGE_SLUG = '/young-clinic1';

    public static function getTitle(): string
    {
        return 'Детская поликлиника №1';
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_YOUNG_SUBDIVISION;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <div>
        <p style="padding-bottom: 7px">
            <h3 style="color: #ea1d14;">Уважаемые пациенты!</h3>
        </p>
        <p style="padding-bottom: 7px">
            <span style="color: red">Дома  №8, №11, №13 по бульвару Космонавтов в г. Красногоск закреплены за врачом Вибе Лилия Алексеевна. Просим Вас, обратить внимание при записи на прием через портал <a href="http://uslugi.mosreg.ru" mce_href="http://uslugi.mosreg.ru" target="_blank" rel="noopener noreferrer">uslugi.mosreg.ru</a> , Call-центр 8-800-550-50-30 , а также Call-центр КГБ№2 8-495-150-20-14. Спасибо!<br />
                С уважением, администрация КГБ №2.
            </span>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <h3>ГБУЗ МО «КГБ № 2» требуются:</h3>
            <ul>
                <li>врач-педиатр (возможность участвовать в социальной ипотеке)</li>
                <li>заведующая педиатрическим отделением</li>
                <li>медицинские сестры</li>
                <li>
                    Врачи специалисты:
                    <ul>
                        <li>отоларинголог</li>
                        <li>офтальмолог</li>
                        <li>травматолог</li>
                        <li>детский хирург</li>
                        <li>детский эндокринолог</li>
                    </ul>
                </li>
            </ul>
        </p>
        <p style="padding-bottom: 7px">
            <b>По вопросам трудоустройства звонить по телефону : 8(495)-561-00-27</b>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/photos1_10.jpg" class="resizeable" width="800px">
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <b>
                <p style="padding-bottom: 7px">
                    <p>Регистратура Детской поликлиники №1</p>
                    <p>Режим работы регистратуры с 8.00 до 20.00 часов</p>
                    <p><span style="color: red">Телефон - 8 (495) 563-45-78; 8 (495) 563-22-57</span></p>
                </p>
                <p style="padding-bottom: 7px">
                    <p>Заведующая поликлиникой</p>
                    <p>Ильясова Патимат Нуцалхановна</p>
                    <p><span style="color: red">Телефон - 8 (495) 563-36-49</span></p>
                </p>
                <p style="padding-bottom: 7px">
                    <p>Старшая медицинская сестра</p>
                    <p>Панкова Оксана Александровна</p>
                    <p><span style="color: red">Телефон - 8 (495) 563-24-93</span></p>
                </p>
            </b>
        </p>
        <p style="padding-bottom: 7px">
            <b>Детская поликлиника №1</b> расположена по адресу г. Красногорск, ул. Ленина, д. 15А.
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
        <h3 style="padding-bottom: 15px; padding-top: 15px">Услуги оказываемые в Детской поликлинике №1:</h3>
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
                        <li>Амплипульстерапия</li>
                        <li>Электросон</li>
                        <li>Ультразвуковая терапия</li>
                        <li>Ультравысокочастотная терапия (УВЧ)</li>
                        <li>Ультрафиолетовое облучение (УФО)</li>
                        <li>Магнитотерапия</li>
                        <li>Индуктотерапия</li>
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
                    <td></td>
                    <td>Массаж детям</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Лечебная физкультура (ЛФК)</td>
                    <td><ul>
                        <li>Групповые и индивидуальные занятия на тренажёрах с инструктором</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>УЗИ</b></td>
                    <td>Ультразвуковое исследование</td>
                    <td><ul>
                        <li>Брюшной полости</li>
                        <li>Женских органов</li>
                        <li>Надпочечников, почек, м/в путей</li>
                        <li>Предстательной железы</li>
                        <li>Молочной железы</li>
                        <li>Щитовидной железы</li>
                        <li>Костно-суставной системы</li>
                        <li>Мягких тканей</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Функциональная диагностика</b></td>
                    <td></td>
                    <td><ul>
                        <li>Электрокардиограмма (ЭКГ)</li>
                        <li>Исследование функций внешнего дыхания (ФВД)</li>
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
                        <li>Исследование на стронгилоидоз</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Гематологические исследования</b></td>
                    <td></td>
                    <td><ul>
                        <li>Клинический (общий) анализ крови по 18-ти параметрам</li>
                        <li>Определение скорости оседания эритроцитов (СОЭ)</li>
                        <li>Определение уровня глюкозы в крови</li>
                        <li>Определение протромбинового индекса</li>
                        <li>Взятие и определение времени свёртывания цельной крови</li>
                        <li>Взятие крови для исследования на малярийные паразиты</li>
                    </ul></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
