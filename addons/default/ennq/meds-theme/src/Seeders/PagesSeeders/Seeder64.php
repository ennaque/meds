<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder64 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Критерии доступности и качества медицинской помощи';
    }

    public static function getSlug(): string
    {
        return '/doc9';
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
        <h3 style="padding-bottom: 7px; text-align: center">
            Страница находится в разработке
        </h3>
        <p style="padding-bottom: 5px">
            <hr>
        </p>
    </div>
</div>';
    }
}
