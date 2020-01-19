<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder24;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder25;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder26;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder27;

class MappingSeeder2427 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Маршруизация';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_MAPPING;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAPPING . Seeder24::getSlug() . "'>
                    ". Seeder24::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAPPING . Seeder25::getSlug() . "'>
                    ". Seeder25::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAPPING . Seeder26::getSlug() . "'>
                    ". Seeder26::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAPPING . Seeder27::getSlug() . "'>
                    ". Seeder27::getTitle() . "
                </a>
            </h4>
        ";
    }
}
