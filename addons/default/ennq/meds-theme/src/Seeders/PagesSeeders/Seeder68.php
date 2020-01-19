<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder68 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Отчёт о проведении специальной оценки условий труда';
    }

    public static function getSlug(): string
    {
        return '/doc14';
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
                        <iframe src='https://drive.google.com/file/d/1thtYlqZZYHW8J6nDRUNTBFr70WVcbkUS/preview' width='850' height='520'></iframe>
                    </p>
                </div>
            </div>";
    }
}
