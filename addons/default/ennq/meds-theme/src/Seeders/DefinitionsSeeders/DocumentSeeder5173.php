<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder51;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder52;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder53;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder54;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder55;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder56;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder57;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder58;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder59;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder60;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder61;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder62;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder63;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder64;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder65;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder66;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder67;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder68;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder69;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder70;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder71;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder72;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder73;

class DocumentSeeder5173 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Документы';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder51::getSlug() . "'>
                    ". Seeder51::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder56::getSlug() . "'>
                    ". Seeder56::getTitle() . "
                </a>
            </h4>
        ";
    }
}
