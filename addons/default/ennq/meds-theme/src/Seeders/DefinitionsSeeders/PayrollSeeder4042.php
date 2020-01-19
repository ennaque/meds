<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder40;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder41;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder42;

class PayrollSeeder4042 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Платные услуги';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_PAYROLL;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PAYROLL . Seeder40::getSlug() . "'>
                    ". Seeder40::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PAYROLL . Seeder41::getSlug() . "'>
                    ". Seeder41::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PAYROLL . Seeder42::getSlug() . "'>
                    ". Seeder42::getTitle() . "
                </a>
            </h4>
        ";
    }
}
