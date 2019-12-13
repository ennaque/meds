<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder42 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Прейскурант цен на платные медицинские услуги (общий)';
    }

    public static function getSlug(): string
    {
        return '/price';
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
        <h5>Прейскурант платных услуг (<a href="http://kgb2.ru/Documents/Price.pdf">скачать</a>)</h5>
        <h5>Прейскурант платных услуг (стоматология) (<a href="http://kgb2.ru/Documents/Price_stoma.pdf">скачать</a>)</h5>
    </p>
</div>
';
    }
}
