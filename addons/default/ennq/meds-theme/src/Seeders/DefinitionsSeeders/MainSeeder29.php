<?php


namespace  Ennq\MedsTheme\Seeders\DefinitionsSeeders;

use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class MainSeeder29 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Главное';
    }

    public static function getSlug(): string
    {
        return MenuSeeder::SLUG_MAIN;
    }

    public static function getParentSlug(): ?string
    {
        return null;
    }

    protected function getContent(): string
    {
        return "
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/contacts'>
                    Должностные лица
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/headphysician'>
                    Страница главного врача
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/allareas'>
                    Обслуживаемые участки
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/singlephonecenter'>
                    Единый центр телефонных звонков
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/licenses'>
                    Лицензии
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/electroregistry'>
                    Электронная регистратура
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/charter'>
                    Управление здравоохранения
                </a>
            </h4>
            <h4 style='padding-bottom: 10px'>
                <a href='" . MenuSeeder::SLUG_MAIN . "/listofdrugs'>
                    Перечень препаратов
                </a>
            </h4>
        ";
    }
}
