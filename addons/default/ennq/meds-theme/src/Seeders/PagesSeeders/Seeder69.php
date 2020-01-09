<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder69 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Приказ Минздрава Московской области от 15.04.2016г. № 820 «О предоставлении информации о деятельности 
        государственных учреждений здравоохранения Московской области»';
    }

    public static function getSlug(): string
    {
        return '/doc15';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_DOCS;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div>
                    <p style='padding-bottom: 5px; text-align: center;'>
                        <b>Приказ Минздрава Московской области от 15.04.2016г. № 820 «О предоставлении информации о 
                        деятельности государственных учреждений здравоохранения Московской области» (
                        <a href='/app/default/ennq/meds-theme/resources/documents/PRIKAZ_MZ_MO_N820.docx'>Скачать</a>)</b>
                    </p>
                </div>
            </div>";
    }
}
