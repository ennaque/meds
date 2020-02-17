<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder70 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Распоряжение Минздрава Московской области от 24.07.2017г. № 210-р «О мерах по совершенствованию организации оказания амбулаторно-поликлинической помощи населению Московской области»';
    }

    public static function getSlug(): string
    {
        return '/doc16';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
'<div>
    <div>
        <p style="padding-bottom: 5px">
            Посмотреть и скачать распоряжение Минздрава Московской области от 24.07.2017г. № 210-р «О мерах по совершенствованию организации оказания амбулаторно-поликлинической помощи населению Московской области» можно по <a href="https://mz.mosreg.ru/download/document/21458">ссылке</a>.
        </p>
    </div>
</div>';
    }
}
