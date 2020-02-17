<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder71 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Приказ Минздрава России от 13.03.2019 №124н "Об утверждении порядка проведения профилактического медицинского осмотра и диспансеризации определенных групп взрослого населения"';
    }

    public static function getSlug(): string
    {
        return '/anotherdoc1';
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
            Посмотреть и скачать приказ Минздрава России от 13.03.2019 №124н "Об утверждении порядка проведения профилактического медицинского осмотра и диспансеризации определенных групп взрослого населения" можно по <a href="http://www.kgb2.ru/Documents/Prikaz_MZRF_13.03.2019%20_N124n.pdf">ссылке</a>.
        </p>
    </div>
</div>';
    }
}
