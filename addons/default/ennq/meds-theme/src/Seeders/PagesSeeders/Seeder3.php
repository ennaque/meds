<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder3 extends BaseSeeder
{

    public const PAGE_SLUG = '/headphysician';
    public const PAGE_TITLE = 'Главный врач';

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
            '<div>
                <div class="second-title">
                    <h2>
                        Главный врач
                    </h2>
                </div>
                <div>
                    <img src="/app/default/files-module/local/images/gv1_3.jpg" class="resizeable" width="800px">
                </div>
                <div>
                    <p style="padding-bottom: 7px; font-weight: bold">
                        График приема посетителей:
                    </p>
                    <p style="padding-bottom: 7px">
                        Понедельник 15.00-17.00
                    </p>
                </div>    
            </div>';
    }
}
