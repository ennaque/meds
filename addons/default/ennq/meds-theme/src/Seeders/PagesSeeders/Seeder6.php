<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder6 extends BaseSeeder
{

    public const PAGE_SLUG = '/licenses';
    public const PAGE_TITLE = 'Лицензии ГБУЗ МО «Красногорская городская больница № 2»';

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_MAIN;
    }

    public static function getTitle(): string
    {
        return self::PAGE_TITLE;
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div class='second-title'>
                    <h2>
                        Лицензии ГБУЗ МО «Красногорская городская больница № 2»
                    </h2>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic1_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic2_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic4_6.jpg' width='300'>
                </div>
                <div>
                    <img src='/app/default/files-module/local/images/lic3_6.jpg' width='300'>
                </div>
            </div>";
    }
}
