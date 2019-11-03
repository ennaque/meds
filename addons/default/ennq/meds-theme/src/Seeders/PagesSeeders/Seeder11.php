<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder11 extends Seeder
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
                    'title' => 'Детская поликлиника №2',
                ],
                'slug'         => '/youngclinic2',
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
'
<div>
    <div>
        <p style="padding-bottom: 7px">
            ГБУЗ МО «КГБ № 2» требуются:
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
        <p style="padding-bottom: 7px">
            <img src="/app/default/files-module/local/images/photos1_11.jpg">
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px">
            <span style="color: red">Call центр (единый центр телефонных звонков)</span>
            <span style="color: red">8 (495) 150-20-14</span>
            <span style="color: red">8 (800) 550-50-30</span>
            <b>
                <p style="padding-bottom: 7px">
                    Регистратура Детской поликлиники №2
                    Режим работы регистратуры с 8.00 до 20.00 часов
                    <span style="color: red">Телефон - 8 (495) 562-90-28; 8 (495) 561-00-45</span>
                </p>
                <p style="padding-bottom: 7px">
                    Зам. главного врача по поликлинической работе
                    Силкина Светлана Владимировна
                    <span style="color: red">Телефон - 8 (495) 561-00-26</span>
                </p>
                <p style="padding-bottom: 7px">
                    Заведующий педиатрическим отделением
                    Буровцев Вадим Владимирович
                    <span style="color: red">Телефон - 8 (495) 562-23-33</span>
                </p>
                <p style="padding-bottom: 7px">
                    Старшая медицинская сестра Детской поликлиники №2
                    Калинина Жанна Васильевна
                    <span style="color: red">Телефон - 8 (495) 562-23-33</span>
                </p>
            </b>
        </p>
        <p style="padding-bottom: 7px">
            <b>Детская поликлиника №2</b> расположена по адресу г. Красногорск, Ильинское шоссе, военный городок Павшино, д. 2В.
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
            Услуги оказываемые в Детской поликлинике №2:
        </p>
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
                        <li>Электросон</li>
                        <li>Диадинамотерапия (ДДТ)</li>
                        <li>Магнитотерапия</li>
                        <li>Ультразвуковая терапия</li>
                        <li>Ультравысокочастотная терапия (УВЧ)</li>
                        <li>Ультрафиолетовое облучение (УФО)</li>
                        <li>Дарсонвализация</li>
                        <li>Амплипульстерапия</li>
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
                    <td>Теплолечение</td>
                    <td><ul>
                        <li>Парафино-озокеритолечение</li>
                    </ul></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Водолечение</td>
                    <td><ul>
                        <li>Циркулярный душ</li>
                        <li>Восходящий душ</li>
                        <li>Душ Шарко</li>
                        <li>Подводный душ-массаж</li>
                        <li>Жемчужные ванны</li>
                    </ul></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Массаж детям</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Лечебная физкультура (ЛФК) с использованием тренажёров</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Спелеотерапия в сильвинитовой спелеоклиматической камере</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Новые методики и технологии</td>
                    <td><ul>
                        <li>Многоканальная функциональная программируемая электростимуляция мышц от аппарата "АККОРД" (для детей)</li>
                        <li>Дозированное вытягивание позвоночника от аппарата "ОРМЕД"</li>
                        <li>Вибрационно-механический массаж мышечно-связачного аппарата позвоночника от аппарата "ОРМЕД-РЕЛАКС"</li>
                        <li>Пневмомассаж от аппарата "ЛИМФА"</li>
                        <li>Вытягивание позвоночника методом "ДЕТЕНЗОР"</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>УЗИ</b></td>
                    <td>Ультразвуковое исследование</td>
                    <td><ul>
                        <li>Сосудов</li>
                        <li>Брюшной полости</li>
                        <li>Женских органов</li>
                        <li>Надпочечников, почек, м/в путей</li>
                        <li>Предстательной железы</li>
                        <li>Молочной железы</li>
                        <li>Щитовидной железы</li>
                        <li>Костно-суставной системы</li>
                        <li>Мягких тканей</li>
                        <li>Головного мозга</li>
                    </ul></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Эхокардиография</td>
                    <td><ul>
                        <li>Эхокардиография с доплер. анализом</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Функциональная диагностика</b></td>
                    <td></td>
                    <td><ul>
                        <li>Электрокардиограмма (ЭКГ)</li>
                        <li>Холтеровское мониторирование ЭКГ</li>
                        <li>Суточный мониторинг артериального давления (СМАД)</li>
                        <li>Реовазография (РВГ)</li>
                        <li>Электроэнцефалограмма (ЭЭГ)</li>
                        <li>Реоэнцефалограмма (РЭГ)</li>
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
                    <td></td>
                    <td>Другие исследования</td>
                    <td><ul>
                        <li>Спинномозговой жидкости</li>
                        <li>Мокроты</li>
                        <li>Транссудатов</li>
                        <li>Экссудатов</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Гематологические исследования</b></td>
                    <td></td>
                    <td><ul>
                        <li>Клинический (общий) анализ крови по 26/12 параметрам</li>
                        <li>Определение скорости оседания эритроцитов (СОЭ)</li>
                        <li>Подсчёт ретикулоцитов</li>
                        <li>Подсчёт лейкоцитарной формулы с описанием морфологии форменных элементов крови</li>
                        <li>Взятие крови для исследования на малярийные паразиты</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Биохимические исследования</b></td>
                    <td>Определение:</td>
                    <td><ul>
                        <li>Общего белка сыворотки крови</li>
                        <li>Альбумина в сыворотке крови</li>
                        <li>Мочевины в сыворотке крови</li>
                        <li>Мочевой кислоты в сыворотке крови</li>
                        <li>Глюкозы в сыворотке крови и моче</li>
                        <li>Гликозилированного гемоглобина в крови</li>
                        <li>ЛПВП в сыворотке крови</li>
                        <li>ЛПНП в сыворотке крови</li>
                        <li>Триглицеридов в сыворотке крови</li>
                        <li>Билирубина и его фракций в сыворотке крови</li>
                        <li>Железа в сыворотке крови</li>
                        <li>Неорганического фосфора в сыворотке крови</li>
                        <li>Общего кальция в сыворотке крови</li>
                        <li>Калия в сыворотке крови</li>
                        <li>Натрия в сыворотке крови</li>
                        <li>Активности альфа-амилазы в крови</li>
                        <li>Активности гамма-глутамилтрансферазы в крови</li>
                        <li>Активности лактатдегидрогеназы в крови</li>
                        <li>Активности щелочной фосфотазы</li>
                        <li>Активности аланинаминотрасферазы в крови</li>
                        <li>Активности аспартатаминотрансферазы в крови</li>
                        <li>Индекса атерогенности</li>
                        <li>Концентрации белков острой фазы (C-реактивного белка)</li>
                        <li>Ревматоидного фактора</li>
                        <li>Прокальцитонина в сыворотке крови</li>
                        <li>lg E в сыворотке крови</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Исследование функций щитовидной железы</b></td>
                    <td>Определение в сыворотке крови:</td>
                    <td><ul>
                        <li>Тиреотропного гормона (ТТГ)</li>
                        <li>Свободного Т4</li>
                        <li>Свободного Т3</li>
                        <li>Аутоантител к тиреоглобулину</li>
                        <li>Аутоантител к тиреопероксидазе</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Показатели системы гемостаза</b></td>
                    <td>Определение:</td>
                    <td><ul>
                        <li>Содержания фибриногена в плазме крови</li>
                        <li>Времени кровотечения</li>
                        <li>Времени свёртывания цельной крови</li>
                        <li>Протромбинового времени, индекса</li>
                        <li>МНО</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Изосерологические исследования</b></td>
                    <td>Определение:</td>
                    <td><ul>
                        <li>Группы крови по системе АВО</li>
                        <li>Резус фактора</li>
                    </ul></td>
                </tr>
                <tr>
                    <td><b>Исследование на онкомаркеры</b></td>
                    <td>Определение в сыворотке крови:</td>
                    <td><ul>
                        <li>Простатического антигена (общ. и своб.)</li>
                        <li>Онкомаркера СА-145 (по программе ДД)</li>
                    </ul></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
';
    }
}
