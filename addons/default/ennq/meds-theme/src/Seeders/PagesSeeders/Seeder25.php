<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder25 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Архангельская амбулатория';
    }

    public static function getSlug(): string
    {
        return '/achangel-disp';
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
            <h3>Маршрутизация пациенетов амбулатории в пос. Архангельское.</h3>
        </p>
    </div>
    <div>
        <p style="padding-bottom: 7px; text-align: center">
            <img src="/app/default/files-module/local/images/routing-scheme_achangel_25.png" class="resizeable" width="800px">
        </p>
    </div>
</div>
';
    }
}
