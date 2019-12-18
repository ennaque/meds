<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder47;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder48;

class ProfexamSeeder4748 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Профосмотр';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_PROFEXAM;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PROFEXAM . Seeder47::getSlug() . "'>
                    ". Seeder47::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_PROFEXAM . Seeder48::getSlug() . "'>
                    ". Seeder48::getTitle() ."
                </a>
            </h4>
        ";
    }
}
