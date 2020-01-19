<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder28;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder29;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder32;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder33;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder34;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder35;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder36;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder37;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;

class PhysterSeeder3238 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Физиотерапевтическое отделение';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_PHYSTER;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder32::getSlug() . "'>
                    ". Seeder32::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder33::getSlug() . "'>
                    ". Seeder33::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder34::getSlug() . "'>
                    ". Seeder34::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder35::getSlug() . "'>
                    ". Seeder35::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder36::getSlug() . "'>
                    ". Seeder36::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder37::getSlug() . "'>
                    ". Seeder37::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PHYSTER . Seeder38::getSlug() . "'>
                    ". Seeder38::getTitle() . "
                </a>
            </h4>
        ";
    }
}
