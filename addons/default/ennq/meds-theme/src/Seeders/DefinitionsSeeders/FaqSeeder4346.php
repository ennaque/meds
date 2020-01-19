<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder43;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder44;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder45;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder46;

class FaqSeeder4346 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Вопрос-ответ';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_FAQ;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_FAQ . Seeder43::getSlug() . "'>
                    ". Seeder43::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_FAQ . Seeder44::getSlug() . "'>
                    ". Seeder44::getTitle() ."
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_FAQ . Seeder45::getSlug() . "'>
                    ". Seeder45::getTitle() . "
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_FAQ . Seeder46::getSlug() . "'>
                    ". Seeder46::getTitle() . "
                </a>
            </h4>
        ";
    }
}
