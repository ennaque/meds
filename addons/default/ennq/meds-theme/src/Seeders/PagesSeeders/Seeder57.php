<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder57 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'О порядке организации медицинского обслуживания населения по участковому принципу';
    }

    public static function getSlug(): string
    {
        return '/doc2';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Зарегистрировано в Минюсте РФ 4 сентября 2006 г. N 8200<br>
                        МИНИСТЕРСТВО ЗДРАВООХРАНЕНИЯ И СОЦИАЛЬНОГО РАЗВИТИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
                        ПРИКАЗ<br>
                        4 августа 2006 г.<br>
                        N 584<br>
                        </b>
                    </p>
                    <p style='padding-bottom: 5px'>
                        В соответствии с пунктом 5.2.11. Положения о Министерстве здравоохранения и социального 
                        развития Российской Федерации, утвержденного Постановлением Правительства Российской 
                        Федерации от 30 июня 2004 г. N 321 (Собрание законодательства Российской Федерации, 
                        2004, N 28, ст. 2898; 2005, N 2, ст. 162; 2006, N 19, ст. 2080), и в целях дальнейшего 
                        совершенствования организации первичной медико-санитарной помощи населению приказываю:<br>
                        Утвердить Порядок организации медицинского обслуживания населения по участковому принципу 
                        согласно приложению.
                    </p>
                    <p style='padding-bottom: 5px; text-align: right;'>
                        Министр М.Ю.ЗУРАБОВ
                    </p>
                    <p style='padding-bottom: 5px; text-align: right;'>
                        Приложение<br>
                        к Приказу Министерства<br>
                        здравоохранения и<br>
                        социального развития<br>
                        Российской Федерации<br>
                        от 04.08.2006 г. N 584<br>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>О порядке организации медицинского обслуживания населения по участковому принципу</b> 
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Настоящий Порядок регулирует вопросы организации медицинского обслуживания населения по 
                        участковому принципу.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Участковый принцип организации медицинского обслуживания населения, обеспечивающий доступность 
                        и качество медицинской помощи, является основной формой организации деятельности 
                        амбулаторно-поликлинических учреждений, оказывающих первичную медико-санитарную помощь 
                        населению муниципальных образований.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Организация медицинского обслуживания населения по участковому принципу осуществляется 
                        органами управления здравоохранением муниципальных образований в соответствии с нормативными 
                        правовыми актами Министерства здравоохранения и социального развития Российской Федерации, 
                        органов исполнительной власти субъектов Российской Федерации и органов местного 
                        самоуправления, а также настоящим Порядком.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Органы управления здравоохранением муниципальных образований осуществляют организацию 
                        медицинского обслуживания населения по участковому принципу с учетом критериев 
                        территориальной (в том числе транспортной) доступности доврачебной помощи, врачебной 
                        помощи, скорой медицинской (неотложной) помощи.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Медицинское обслуживание населения по участковому принципу осуществляется:
                        в городском округе - поликлиникой, в том числе детской, центром (отделением) общей 
                        врачебной (семейной) практики, поликлиническим отделением стационарно-поликлинического 
                        учреждения; в муниципальном районе - поликлиникой, в том числе детской, центром (отделением) 
                        общей врачебной (семейной) практики, поликлиническим отделением стационарно-поликлинического 
                        учреждения, амбулаторией.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Установление зон обслуживания и закрепление населения за амбулаторно-поликлиническими и 
                        стационарно-поликлиническими учреждениями производится органами управления здравоохранением 
                        муниципальных образований в целях соблюдения принципа оказания первичной медико-санитарной 
                        помощи по месту жительства с учетом численности, плотности, возрастно-полового состава 
                        населения, уровня заболеваемости, географических и иных особенностей территорий.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Распределение населения по врачебным участкам осуществляется руководителями 
                        амбулаторно-поликлинических или стационарно-поликлинических учреждений в зависимости 
                        от конкретных условий оказания первичной медико-санитарной помощи населению в целях 
                        максимального обеспечения ее доступности и соблюдения иных прав граждан.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li><b>Руководители амбулаторно-поликлинических или стационарно-поликлинических учреждений в 
                        целях обеспечения права граждан на выбор врача и лечебно-профилактического учреждения 
                        прикрепляют граждан, проживающих вне зоны обслуживания амбулаторно-поликлинического 
                        учреждения или стационарно-поликлинического учреждения, к врачам-терапевтам участковым, 
                        врачам-педиатрам участковым, врачам общей практики (семейным врачам) для медицинского 
                        наблюдения и лечения, не превышая численности населения на одну должность участкового 
                        врача более чем на 15 процентов от нормативной, предусмотренной пунктом 11 настоящего 
                        Порядка.</b></li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>В амбулаторно-поликлинических и стационарно-поликлинических учреждениях могут быть организованы врачебные участки:
                        <ul>
                            <li>терапевтический;</li>
                            <li>педиатрический;</li>
                            <li>врача общей практики;</li>
                            <li>семейного врача;</li>
                            <li>комплексный терапевтический участок.</li>
                        </ul>   
                        </li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Обслуживание населения на врачебных участках осуществляется:<br>
                        врачом-терапевтом участковым, медицинской сестрой участковой на терапевтическом участке;<br>
                        врачом педиатром-участковым, медицинской сестрой участковой на педиатрическом участке;<br>
                        врачом общей практики (семейным врачом), помощником врача общей практики, медицинской 
                        сестрой врача общей практики на участке врача общей практики (семейного врача);<br>
                        врачом-терапевтом участковым, фельдшером (акушеркой), медицинской сестрой участковой на 
                        комплексном терапевтическом участке.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Рекомендуемая численность прикрепленного населения на врачебных участках в соответствии с 
                        нормативной штатной численностью медицинского персонала составляет:<br>
                        на терапевтическом участке - 1700 человек взрослого населения в возрасте 18 лет и старше;<br>
                        на педиатрическом участке - 800 человек детского населения 0-17 лет включительно;<br>
                        на участке врача общей практики - 1500 человек взрослого населения в возрасте 18 лет и старше;<br>
                        на участке семейного врача - 1200 человек взрослого и детского населения;<br>
                        на комплексном терапевтическом участке - 2000 и более человек взрослого и детского населения.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Комплексный терапевтический участок формируется из населения врачебного участка 
                        амбулаторно-поликлинического или стационарно-поликлинического учреждения с недостаточной 
                        численностью прикрепленного населения (малокомплектный участок) или населения, обслуживаемого 
                        врачом-терапевтом амбулатории и населения, обслуживаемого фельдшерско-акушерскими пунктами 
                        (фельдшерскими пунктами).</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Врачи-терапевты участковые, врачи-педиатры участковые, врачи общей практики (семейные врачи), 
                        фельдшеры, медицинские сестры участковые, медицинские сестры врача общей практики в рамках 
                        своей компетенции осуществляют ведение паспорта врачебного участка, информационной 
                        (компьютерной) базы данных состояния здоровья обслуживаемого населения.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>Руководители амбулаторно-поликлинических и стационарно-поликлинических учреждений по 
                        согласованию с органами управления здравоохранением муниципальных образований в зависимости 
                        от конкретных условий оказания первичной медико-санитарной помощи населению в целях 
                        обеспечения ее доступности для обслуживания комплексных терапевтических участков 
                        (более 2000 чел.) могут формировать постоянно действующие бригады медицинских работников, 
                        состоящие из врача-терапевта участкового (врача-педиатра участкового), фельдшеров, акушерок, 
                        медицинских сестер, с распределением функциональных обязанностей по компетенции, исходя из 
                        установленных штатных нормативов, предназначенных для расчета количества должностей, 
                        предусмотренных для выполнения учреждением возложенных на него функций.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>В районах Крайнего Севера и приравненных к ним местностях, высокогорных, пустынных, безводных 
                        и других районах (местностях) с тяжелыми климатическими условиями, с длительной сезонной 
                        изоляцией, а также в местностях с низкой плотностью населения, в целях обеспечения доступности 
                        медицинской помощи населению руководителями амбулаторно-поликлинических и 
                        стационарно-поликлинических учреждений по согласованию с органами управления здравоохранением 
                        муниципальных образований врачебные участки могут быть сформированы с меньшей численностью 
                        прикрепленного населения, с сохранением штатных должностей врачей-терапевтов участковых, 
                        врачей-педиатров участковых, врачей общей практики (семейных врачей), медицинских сестер 
                        участковых, медицинских сестер врача общей практики, фельдшеров (акушерок) в полном объеме.</li>
                    </p>
                    <p style='padding-bottom: 5px'>
                        <li>При организации медицинского обслуживания населения по участковому принципу функция врачебной 
                        должности врача-терапевта участкового, врача-педиатра участкового, врача общей практики 
                        (семейного врача), должности среднего медицинского работника (медицинской сестры участковой, 
                        фельдшера) определяется объемом работы, который должен быть выполнен в пределах годового 
                        баланса рабочего времени по должности, с учетом специфики организации их деятельности.</li>
                    </p>
                </div>
            </div>";
    }
}
