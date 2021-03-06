<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder40 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Информация для пациентов';
    }

    public static function getSlug(): string
    {
        return '/infoforpatient';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PAYROLL;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <b>Платные услуги.</b>
    </p>
    <p style="padding-bottom: 7px">
        С целью <b>повышения</b> <span style="text-decoration: underline">доступности и качества оказания медицинской помощи, более полного удовлетворения потребностей населения в медицинской помощи</span> в ГБУЗ МО КГБ№2 организованно оказание платных медицинских услуг.
    </p>
    <p style="padding-bottom: 7px">
        Учреждение предоставляет платные медицинские услуги <b>на иных условиях</b>, чем предусмотрено территориальной программой государственных гарантий и (или) целевыми программами <b>по желанию потребителя</b> в соотвествии с Федеральным Законом РФ от 21.11.2011 года № 323-ФЗ «Об основах охраны здоровья граждан Российской Федерации», постановлением Правительства Российской Федерации от 01.10.2012 года № 1006 «Об утверждении Правил предоставления медицинским организациям платных медицинских услуг», Положением о порядке и условиях предоставления платных медицинских услуг пациентам в ГБУЗ МО «Красногорская городская больница №2», утвержденного главным врачом.
    </p>
    <p style="padding-bottom: 7px">
        <b>Условия предоставлени платных услуг :</b>
        <ul>
            <li><b>При предоставлении медицинских услуг анонимно</b>, за исключением случаев, предусмотренных законодательством Российской Федерации (ВИЧ, СПИД, туберкулез и т.д.)</li>
            <li><b>Гражданам иностранных государств</b>, лицам без гражданства, за исключением лиц, затрахованных по обязательному медицинскому страхованию, и гражданам Российской Федерации, не проживающим постноянно на ее территории и не явля́ющимися затрахованными по обязательному медицинскому страхованию, если иное не предусмотрено международными договорами Российской Федерации</li>
            <li><b>При самостоятельном обращении за получением медицинских услуг</b>, за исключением случаев и порядка, предусмотренных статьей 21 Федерального закона «Об основах охраны здоровья граждан в Российской Федерации», и случаев оказания скорой, в том числе скорой специализированной, медицинской помощи и медицинсой помощи, оказываемой в неотложной или экстренной форме.</li>
            <li><b>Отстутствием медицинской услуги</b> в Территориальной Программе госгарантий оказания бесплатной медицинской помощи гражданам РФ.</li>
            <li><b>При станционарном лечении</b> – пребывание на койке матери с ребенком старше 5 лет и т.д.</li>
        </ul>
    </p>
    <p style="padding-bottom: 7px">
        Для получения платной услуги Вам требуется обратиться в регистртуру коммерческого отдела для заключения договора и оплаты.
    </p>
    <p style="padding-bottom: 7px">
        Оплата услуг производится наличными средствами в соответствии с прейскурантом цен.
    </p>
    <p style="padding-bottom: 7px">
        Медицинские услуги могут предоставлятся как в полном объеме стандарта медицинской помощи, так и в виде отдельных консультаций или медицинских вмешательств, в т. ч. в объеме, превышающем стандарт.
    </p>
    <p style="padding-bottom: 7px">
        Мы можем организовать консультации врачей – специалистов на дому (за исключением случаев, когда медицинская помощь на дому оказывается по медицинским показаниям).
    </p>
    <p style="padding-bottom: 7px">
        Граждане, получающие платные медицинские услуги, имеют право воспользоваться социалным налоговым вычетом.
    </p>
    <p style="padding-bottom: 7px">
        ОБРАЩЕМ ВАШЕ ВНИМАНИЕ НА ТО, ЧТО <b>ЛЬГОТЫ</b> ПРИ ПОЛУЧЕНИИ ПЛАТНЫХ МЕДИЦИНСКИХ УСЛУГ В ГБУЗ МО «КРАСНОГОРСКАЯ ГОРОДСКАЯ БОЛЬНИЦА №2» <b>НЕ ПРЕДОСТАВЛЯЮТСЯ</b>.
    </p>
    <p style="padding-bottom: 7px">
        <br>
        <h3>УВАЖАЕМЫЕ ПАЦИЕНТЫ!</h3>
        <br>
        Удаление папиллом, атером и других доброкачественных образований кожи проводится в каб. 417 врачом - хирургом Мишиной Л.В. на аппарате «Сургитрон» на платной основе <span style="text-decoration: underline">каждую среду с 8:00 до 14:00</span>.
    </p>
    <p style="padding-bottom: 7px">
        Запись осуществляется в Call-центре и по телефону: 8 (495) 150-20-14
    </p>
</div>
';
    }
}
