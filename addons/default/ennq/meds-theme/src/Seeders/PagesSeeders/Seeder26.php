<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder26 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Маршрутизация пациентов Взрослой поликлиники №2';
    }

    public static function getSlug(): string
    {
        return '/old-clinic2';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_MAPPING;
    }

    protected function getContent(): string
    {
        return
            '
<div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/oldclinic1_26.png" class="resizeable" width="800px">
        </p>
    </div>
</div>
';
    }
}
