<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder21;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder22;

class DispensarySeeder2122 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Амбулатории и ФАП';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_DISPENSARY;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DISPENSARY . Seeder21::getSlug() . "'>
                    ". Seeder21::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DISPENSARY . Seeder22::getSlug() . "'>
                    ". Seeder22::getTitle() . "
                </a>
            </h4>
        ";
    }
}
