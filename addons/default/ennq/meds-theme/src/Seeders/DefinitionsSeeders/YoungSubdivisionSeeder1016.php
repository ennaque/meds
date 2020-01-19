<?php


namespace Ennq\MedsTheme\Seeders\DefinitionsSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class YoungSubdivisionSeeder1016 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Детское подразделение';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_YOUNG_SUBDIVISION;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/youngclinic1'>
                    Детская поликлиника №1
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/young-clinic2'>
                    Детская поликлиника №2
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/young-clinic3'>
                    Детская поликлиника №3
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/young-infection'>
                    Детское инфекционное отделение
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/milk-kitchen'>
                    Молочная кухня
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/nahabino'>
                    Нахабино
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . $this->getSlug() . "/opaliha'>
                    Опалиха
                </a>
            </h4>
        ";
    }
}
