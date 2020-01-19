<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder48 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'ГРАФИК проведения профилактического осмотра учащихся 4-х и 8-х классов в I полугодии 2019-2020 учебного года';
    }

    public static function getSlug(): string
    {
        return '/graph';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PROFEXAM;
    }

    protected function getContent(): string
    {
        return
'
<div>
    <p style="padding-bottom: 7px">
        <h4>4–е классы (10 лет)</h4>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <td>специалист</td>
                    <td>ФИО</td>
                    <td>даты</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Невролог</td>
                    <td></td>
                    <td>05.09, 12.09, 19.09, 26.09, 03.10, 10.10, 17.10, 24.10, 31.10, 07.11, 14.11, 21.11, 28.11, 05.12, 12.12, 19.12, 26.12.</td>
                </tr>
                <tr>
                    <td>Детский стоматолог</td>
                    <td></td>
                    <td>05.09, 12.09, 19.09, 26.09, 03.10, 10.10, 17.10, 24.10, 31.10, 07.11, 14.11, 21.11, 28.11, 05.12, 12.12, 19.12, 26.12.</td>
                </tr>
                <tr>
                    <td>Детский эндокринолог</td>
                    <td>Шидловская Е.А.</td>
                    <td>05.09, 12.09, 19.09, 26.09, 03.10, 10.10, 17.10, 24.10, 31.10, 07.11, 14.11, 21.11, 28.11, 05.12, 12.12, 19.12, 26.12.</td>
                </tr>
                <tr>
                    <td>Травматолог-ортопед</td>
                    <td>Ибрагимов А.А.</td>
                    <td>05.09, 12.09, 19.09, 26.09, 03.10, 10.10, 17.10, 24.10, 31.10, 07.11, 14.11, 21.11, 28.11, 05.12, 12.12, 19.12, 26.12.</td>
                </tr>
                <tr>
                    <td>Офтальмолог</td>
                    <td>Михальский Э.А.</td>
                    <td>05.09, 12.09, 19.09, 26.09, 03.10, 10.10, 17.10, 24.10, 31.10, 07.11, 14.11, 21.11, 28.11, 05.12, 12.12, 19.12, 26.12.</td>
                </tr>
            </tbody>
        </table>
    </p>

    <p style="padding-bottom: 7px">
        <h4>8–е классы (10 лет)</h4>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <td>специалист</td>
                    <td>ФИО</td>
                    <td>даты</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Детский стоматолог</td>
                    <td></td>
                    <td>09.09, 16.09, 23.09, 30.09, 07.10, 14.10, 21.10, 28.10, 11.11, 18.11, 25.11, 02.12, 09.12, 16.12, 23.12.</td>
                </tr>
                <tr>
                    <td>Детский уролог-андролог</td>
                    <td>Магомедов М.П.</td>
                    <td>09.09, 16.09, 23.09, 30.09, 07.10, 14.10, 21.10, 28.10, 11.11, 18.11, 25.11, 02.12, 09.12, 16.12, 23.12.</td>
                </tr>
                <tr>
                    <td>Детский акушер-гинеколог</td>
                    <td></td>
                    <td>09.09, 16.09, 23.09, 30.09, 07.10, 14.10, 21.10, 28.10, 11.11, 18.11, 25.11, 02.12, 09.12, 16.12, 23.12.</td>
                </tr>
            </tbody>
        </table>
    </p>

    <p style="padding-bottom: 7px">
        Зав. ООМПДиП: Максимова В.Б.
    </p>
    <p style="padding-bottom: 7px">
        Зам.гл.врача по поликлинической работе с детским населением: Силкина С.В.
    </p>
</div>
';
    }
}
