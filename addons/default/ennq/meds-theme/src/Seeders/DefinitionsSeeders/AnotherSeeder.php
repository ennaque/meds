<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder50;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder39;


class AnotherSeeder extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Другое';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_ANOTHER;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . Seeder50::getSlug() . "'>
                    ". Seeder50::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . Seeder39::getSlug() . "'>
                    ". Seeder39::getTitle() . "
                </a>
            </h4>
        ";
    }
}
