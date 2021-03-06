<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder51 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Приказ о перечне документов';
    }

    public static function getSlug(): string
    {
        return '/doc1';
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
                        <b>ПРИКАЗ<br>
                        ГБУЗ МО «Красногорская городская больница № 2»<br>
                        № 189<br>
                        </b>
                    </p>
                    <p style='padding-bottom: 5px; float: left; width: 50%;'>
                        <b>г. Красногорск</b>
                    </p>
                    <p style='padding-bottom: 5px; float: left; width: 50%; text-align: right;'>
                        <b>« 14 » мая 2012г.</b>
                    </p>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>«Об утверждении документов,
                            регламентирующих порядок
                            оказания медицинской помощи
                            в ГБУЗ МО КГБ № 2» 
                        </b>
                    </p>
                    <p style='padding-bottom: 10px'>
                        На основании норм Федерального закона РФ от 21.11.2011г. № 323-ФЗ «Об основах охраны здоровья 
                        граждан в Российской Федерации», Федерального закона РФ от 29.11.2010г. № 326-ФЗ «Об 
                        обязательном медицинском страховании в Российской Федерации», Программ государственных гарантий 
                        оказания гражданам РФ бесплатной медицинской помощи, в целях упорядочения работы по оказанию 
                        медицинской помощи взрослому и детскому населению, закрепленному за учреждением,
                    </p>
                    <p style='padding-bottom: 5px'>
                        <b>Приказываю:</b>
                    </p>
                    <p style='padding-bottom: 5px'>
                        1. Утвердить:
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.1. «Порядок оказания медицинской помощи в государственном бюджетном учреждении 
                        здравоохранения Московской области «Красногорская городская больница № 2» (ГБУЗ МО КГБ № 2) 
                        - Приложение № 1 к настоящему приказу;
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.2. «Порядок оказания консультативной и диагностической медицинской помощи детям 
                        Красногорского района в ГБУЗ МО «Красногорская городская больница № 2» - Приложение № 2 к 
                        настоящему приказу;
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.3. «Порядок прикрепления граждан на медицинское обслуживание к ГБУЗ МО «Красногорская 
                        городская больница № 2» - Приложение № 3 к настоящему приказу;
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.4. «Порядок рассмотрения заявлений граждан, проживающих вне зоны обслуживания учреждением, 
                        о прикреплении на медицинское обслуживание к ГБУЗ МО «Красногорская городская больница № 2» 
                        - Приложение № 4 к настоящему приказу;
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.5. «Правила поведения пациентов в ГБУЗ МО «Красногорская городская больница № 2» - 
                        Приложение № 5 к настоящему приказу;
                    </p>
                    <p style='padding-bottom: 5px'>
                        1.6. «Информацию для пациентов (составленную на основании норм Федерального закона РФ от 
                        21.11.2011г. № 323-ФЗ «Об основах охраны здоровья граждан в Российской Федерации») – 
                        Приложение № 6 к настоящему приказу.
                    </p>
                </div>
            </div>";
    }
}
