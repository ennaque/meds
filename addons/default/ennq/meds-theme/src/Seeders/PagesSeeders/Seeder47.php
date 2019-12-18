<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder47 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Приказ МЗ РФ от 10.08. 2017 г. №514-н «О порядке прохождения профилактических медицинских осмотров несовершеннолетними»';
    }

    public static function getSlug(): string
    {
        return '/mhorder';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PROFEXAM;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <h5>Приказ МЗ РФ  от 10.08. 2017 г. №514-н «О порядке прохождения профилактических медицинских  осмотров несовершеннолетними» (<a href="http://www.kgb2.ru/Documents/PRIKAZ_MZ_RF_N514_n.docx">скачать</a>)</h5>
    </p>
    <p style="padding-bottom: 7px">
        В поликлинических подразделениях ГБУЗ МО «Красногорская городская больница №2» организованы профилактические осмотры неорганизованного детского населения.
    </p>
    <p style="padding-bottom: 7px">
        Для детей, посещающих образовательные учреждения, организованы профилактические осмотры в образовательных учреждениях с помощью выездной бригады врачей–специалистов.В зависимости от возраста, подлежащих осмотру детей, осуществляется определенный перечень исследований, согласно рекомендованному плану по приказу МЗ РФ  от 10.08. 2017 г. №514-н  «О порядке   прохождения  профилактических медицинских  осмотров несовершеннолетними» .
    </p>
    <p style="padding-bottom: 7px">
        В поликлинических подразделениях профилактические осмотры проводятся по специально выделенным дням по предварительной записи. Запись на проф.осмотр осуществляется врачами-педиатрами и медицинским персоналом на сестринском посту. Информацию и направление на прохождение проф.осмотра пациент получает от своего участкового врача педиатра. . В день проведения проф.осмотра  в поликлинике  организовывается не только осмотр врачами-специалистами , а также проводятся лабораторные и инструментальные исследования (УЗИ, ЭКГ). Если ребенку по возрасту показана вакцинация, то ребенок получает ее в день осмотра.
    </p>
    <p style="padding-bottom: 7px">
        После завершения осмотра врач-педиатр оформляет заключение и выдает на руки законным представителям ребенка заключение по форме 030-ПО/У-17.
    </p>
    <p style="padding-bottom: 7px">
        Частота проведения осмотров:
        <ul>
            <li>В поликлинике 2 раза в месяц, при необходимости количество осмотров в месяц может быть увеличено.</li>
            <li>В образовательных учреждениях с сентября по май - 2 раза в неделю (понедельники и четверги). План проф. осмотров в образовательных учрежденияхсоставляется в начале текущего года и подписывается главным врачом.</li>
            <li>Кроме того, с 19.08.2019 г.по 30.08.2019 г. во всех поликлинических подразделениях больницы организованы приёмы врачей педиатров  в кабинетах «Справка в один шаг» для оформления справок для посещеия образовательных учреждеий со взятием анализов на энтеробиоз(после летнего отдыха). График работы с 09.00 до 20.00ч. Предварительной записи не требуется.</li>
        </ul>
    </p>
</div>
';
    }
}
