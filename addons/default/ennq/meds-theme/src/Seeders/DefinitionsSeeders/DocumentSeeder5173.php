<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder51;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder52;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder53;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder54;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder55;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder56;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder57;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder58;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder59;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder60;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder61;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder62;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder63;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder64;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder65;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder66;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder67;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder68;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder69;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder70;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder71;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder72;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder73;

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
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder52::getSlug() . "'>
                    ". Seeder52::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder53::getSlug() . "'>
                    ". Seeder53::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder54::getSlug() . "'>
                    ". Seeder54::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder55::getSlug() . "'>
                    ". Seeder55::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder56::getSlug() . "'>
                    ". Seeder56::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder57::getSlug() . "'>
                    ". Seeder57::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder58::getSlug() . "'>
                    ". Seeder58::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder59::getSlug() . "'>
                    ". Seeder59::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder60::getSlug() . "'>
                    ". Seeder60::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder61::getSlug() . "'>
                    ". Seeder61::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder62::getSlug() . "'>
                    ". Seeder62::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder63::getSlug() . "'>
                    ". Seeder63::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder64::getSlug() . "'>
                    ". Seeder64::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder65::getSlug() . "'>
                    ". Seeder65::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder66::getSlug() . "'>
                    ". Seeder66::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder67::getSlug() . "'>
                    ". Seeder67::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder68::getSlug() . "'>
                    ". Seeder68::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder69::getSlug() . "'>
                    ". Seeder69::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder70::getSlug() . "'>
                    ". Seeder70::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder71::getSlug() . "'>
                    ". Seeder71::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder72::getSlug() . "'>
                    ". Seeder72::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_DOCS . Seeder73::getSlug() . "'>
                    ". Seeder73::getTitle() . "
                </a>
            </h4>
        ";
    }
}
