<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder28;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder29;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder30;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder31;


class CdiaglSeeder2831 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Клинико-диагностическая лаборатория';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_CDIAGL;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_CDIAGL . Seeder28::getSlug() . "'>
                    ". Seeder28::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_CDIAGL . Seeder29::getSlug() . "'>
                    ". Seeder29::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_CDIAGL . Seeder30::getSlug() . "'>
                    ". Seeder30::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_CDIAGL . Seeder31::getSlug() . "'>
                    ". Seeder31::getTitle() . "
                </a>
            </h4>
        ";
    }
}
