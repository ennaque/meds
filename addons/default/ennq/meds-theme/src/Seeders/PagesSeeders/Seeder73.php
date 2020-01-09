<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder73 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Нормативные документы по льготному лекарственному обеспечению';
    }

    public static function getSlug(): string
    {
        return '/anotherdoc3';
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
                        <b>Федеральный Закон №178-ФЗ от 17 июля 1999 года «О государственной социальной помощи»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_1.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Постановление Правительства РФ от 30 июля 1994 года №890 «О государственной поддержке 
                        развития медицинской промышленности и улучшении обеспечения населения и учреждений 
                        здравоохранения лекарственными средствами и изделиями медицинского назначения»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_2.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Постановление Правительства МО от 25 декабря 2018 года № 998/46 «О Московской областной 
                        программ государственных гарантий бесплатного оказания гражданам медицинской помощи на 2019 
                        год и плановый период 2020 и 2021 годов»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_3.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Распоряжение Правительства РФ от 10.12.2018 N 2738-р «Об утверждении перечня жизненно 
                        необходимых и важнейших лекарственных препаратов на 2019 год, а также перечней лекарственных 
                        препаратов для медицинского применения и минимального ассортимента лекарственных препаратов, 
                        необходимых для оказания медицинской помощи»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_4.docx'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Распоряжение правительства РФ от 31 декабря 2018 г. № 3053-р «Перечень медицинских изделий, 
                        имплантируемых в организм человека при оказании медицинской помощи в рамках программы 
                        государственных гарантий бесплатного оказания гражданам медицинской помощи»; «Перечень 
                        медицинских изделий, отпускаемых по рецептам на медицинские изделия при предоставлении 
                        набора социальных услуг»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_5.docx'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Приказ МЗ РФ от 14 января 2019 г. N 4н «Об утверждении порядка назначения и выписывания 
                        лекарственных препаратов, а также форм рецептурных бланков на лекарственные препараты, порядка 
                        оформления указанных бланков, их учета и хранения»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_6.docx'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Приказ МЗ РФ от 11 июля 2017 г. №403н «Об утверждении правил отпуска лекарственных 
                        препаратов для медицинского применения, в том числе иммунобиологических лекарственных 
                        препаратов, аптечными организациями, индивидуальными предпринимателями, имеющими лицензию 
                        на фармацевтическую деятельность»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_7.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Приказ МЗ МО от 23 января 2015 года №80 «Об утверждении Регламента взаимодействия 
                        участников системы льготного лекарственного обеспечения»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_8.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Постановление Правительства РФ от 21 мая 2019 года № 628 «Об установлении норматива 
                        финансовых затрат в месяц на одного гражданина, получающего государственную социальную помощь 
                        в виде социальной услуги по обеспечению в соответствии со стандартами медицинской помощи по 
                        рецептам врача (фельдшера) лекарственными препаратами для медицинского применения, 
                        медицинскими изделиями, а также специализированными продуктами лечебного питания для 
                        детей-инвалидов, на 2019 год»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_9.pdf'>Скачать</a>)</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Федеральный Закон №178-ФЗ от 17 июля 1999 года «О государственной социальной помощи»(
                        <a href='/app/default/ennq/meds-theme/resources/documents/doc73_10.pdf'>Скачать</a>)</b>
                    </p>
                </div>
            </div>";
    }
}
