<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder41 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Положение о платных медицинских услугах';
    }

    public static function getSlug(): string
    {
        return '/mainrules';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PAYROLL;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <a href="https://drive.google.com/file/d/0B_I-O9LzETSBX0tqbV9lMEM5VGM/view"><h5>СКАЧАТЬ ПОЛОЖЕНИЕ О ПЛАТНЫХ УСЛУГАХ</h5></a>
    </p>
    <p style="padding-bottom: 7px">
        <img src="/app/default/files-module/local/images/img_41.jpg" class="resizeable" width="800px">
    </p>
</div>
';
    }
}
