<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder43 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Права и обязанности пациента';
    }

    public static function getSlug(): string
    {
        return '/rightsandrules';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_FAQ;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <h5>Права и обязанности пациента (<a href="http://www.kgb2.ru/spravka/prava-i-obyazannosti-paczienta.html">скачать</a>)</h5>
    </p>
</div>
';
    }
}
