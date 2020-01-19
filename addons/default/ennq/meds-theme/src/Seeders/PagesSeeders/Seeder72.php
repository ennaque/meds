<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder72 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Постановление Правительства Московской области от 25.12.2018 № 998/46 "О Московской областной 
        программе государственных гарантий бесплатного оказания гражданам медицинской помощи на 2019 год и на 
        плановый период 2020 и 2021 годов"';
    }

    public static function getSlug(): string
    {
        return '/anotherdoc2';
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
                        <b>Постановление Правительства Московской области от 25.12.2018 № 998/46 \"О Московской 
                        областной программе государственных гарантий бесплатного оказания гражданам медицинской помощи 
                        на 2019 год и на плановый период 2020 и 2021 годов\" (
                        <a href='https://mosreg.ru/download/document/962839'>Скачать</a>)</b>
                    </p>
                </div>
            </div>";
    }
}
