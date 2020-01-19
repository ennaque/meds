<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder17;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder18;

class OldSubdivision1720 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Детское подразделение';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_OLD_SUBDIVISION;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . self::getSlug() . Seeder17::getSlug() . "'>
                    Детская поликлиника №1
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . self::getSlug() . Seeder18::getSlug() . "'>
                    Детская поликлиника №2
                </a>
            </h4>
        ";
    }
}
