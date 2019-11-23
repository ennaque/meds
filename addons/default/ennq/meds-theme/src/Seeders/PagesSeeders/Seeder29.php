<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder29 extends Seeder
{
    public static function getTitle(): string
    {
        return 'Оборудование клинико-диагностической лаборатории';
    }

    public static function getSlug(): string
    {
        return '/cdiaglinventory';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_CDIAGL;
    }

    private function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <b>РАЗДЕЛ НАХОДИТСЯ В РАЗРАБОТКЕ.</b>
    </p>
</div>
';
    }
}
