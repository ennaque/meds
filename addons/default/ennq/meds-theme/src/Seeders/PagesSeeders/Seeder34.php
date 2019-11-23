<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder34 extends BaseSeeder
{
    public static function getTitle(): string
    {
        return 'Жемчужные ванны';
    }

    public static function getSlug(): string
    {
        return '/jewelbath';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_PHYSTER;
    }

    protected function getContent(): string
    {
        return
            "<div>
                <div>
                    <p style='padding-bottom: 7px'>
                        Жемчужные  ванны - одна из приятных, расслабляющих водолечебных процедур. Свое название 
                        процедура получила из-за образования в воде пузырьков воздуха, напоминающих переливающиеся 
                        жемчужины. Через решетку на дне ванны с помощью компрессора пропускают воздух под высоким 
                        давлением, который выходя из отверстий в металлических трубках, образует большое количество 
                        движущихся пузырьков различного размера, воздействующих на кожу, поверхностные нервные 
                        окончания, мелкие сосуды, рефлексогенные зоны. После курса такого «жемчужного» 
                        гидромассажа нормализуется возбудимость нервной системы,  артериальное давление, улучшается 
                        кровообращение, сон, тургор кожи и тонус мышц.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Жемчужные ванны применяются в качестве седативного средства при:
                        <ul>
                            <li>невротических состояниях;</li>
                            <li>астенических синдромах различного происхождения;</li>
                            <li>вегето-сосудистой дистонии;</li>
                            <li>гипертонической болезни 1 ст.;</li>
                            <li>нарушении сна;</li>
                            <li>эмоциональных перегрузках, хроническом стрессе;</li>
                            <li>общем утомлении.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    Курс лечения состоит из 10-20 процедур.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Для получения информации о порядке назначения и проведения процедуры  обращаться к 
                    врачам-физиотерапевтам в 
                    <b>кабинеты №№ 203, 207, 206.</b>
                    </p>
                </div>
            </div>";
    }
}
