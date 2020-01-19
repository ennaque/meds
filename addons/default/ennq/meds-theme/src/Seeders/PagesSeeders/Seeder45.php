<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder45 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Оформление детей в дошкольные учереждения';
    }

    public static function getSlug(): string
    {
        return '/schoolforkids';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_FAQ;
    }

    protected function getContent(): string
    {
        return
"
<div>
    <div>
        <p style='padding-bottom: 7px'>
            Для оформления в детские дошкольные учреждения необходимо сдать следующие анализы:
            <ul>
                <li>крови</li>
                <li>мочи</li>
                <li>кала на яйца глистов</li>
                <li>кала на кишечную группу</li>
            </ul>
        </p>
        <p style='padding-bottom: 7px'>
            Пройти осмотр врачей-специалистов. Комиссия по оформлению детей в детские дошкольные учреждения 
            проходит в поликлинике каждый четверг.
        </p>
        <p style='padding-bottom: 7px'>
            <b>Документы можно получить в регистратуре после 17.00</b>
        </p>
    </div>
</div>
";
    }
}
