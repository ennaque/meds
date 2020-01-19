<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder24 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Путилковская амбулатория';
    }

    public static function getSlug(): string
    {
        return '/putilkov-disp';
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
        <p style="padding-bottom: 7px">
            <h3>Маршрутизация пациентов амбулатории в д. Путилково.</h3>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/routing-scheme_putilcovo_24.png" class="resizeable" width="800px">
        </p>
    </div>
</div>
';
    }
}
