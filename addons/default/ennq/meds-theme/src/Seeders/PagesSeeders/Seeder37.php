<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder37 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Циркулярный душ, душ Шарко';
    }

    public static function getSlug(): string
    {
        return '/circledouche';
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
                        Циркулярный душ – это водолечебная процедура, во время которой на тело пациента воздействуют 
                        большим количеством тонких горизонтальных водяных струек определенной температуры, направленных 
                        под повышенным давлением. Они оказывают выраженное возбуждающее действие на периферические 
                        рецепторы и тонизируют ЦНС. В процессе лечения стимулируется кровообращение, улучшаются тургор 
                        кожи и тонус мышц, активизируются защитные силы организма и его устойчивость к внешним 
                        воздействиям.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Показания:
                        <ul>
                            <li>нейроциркуляторная дистония;</li>
                            <li>начальные стадии гипертонической болезни;</li>
                            <li>переутомление;</li>
                            <li>астенические состояния;</li>
                            <li>избыточный вес у детей.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    Курс лечения состоит из 10-20 процедур продолжительностью 2-5 минут каждая, проводимых ежедневно 
                    или через день. 
                    </p>
                    <p style='padding-bottom: 7px'>
                    Для получения информации о порядке назначения и проведения процедуры обращаться к 
                    врачам-физиотерапевтам в 
                    <b>кабинеты №№ 203, 207, 206.</b>
                    </p>
                    <p style='padding-bottom: 7px'>
                        Душ Шарко – это душ высокого давления. При проведении процедуры пациент стоит на расстоянии 
                        3.5-4.0 м от душевой кафедры. Медицинская сестра поочередно направляет струю воды под 
                        определенным давлением на ноги, заднюю, переднюю и боковые поверхности тела, повторяя эти 
                        манипуляции несколько раз. Душ Шарко улучшает тургор кожи и тонус мышц, стимулирует 
                        кровообращение и обменные процессы, уменьшает толщину подкожно-жирового слоя.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Показания:
                        <ul>
                            <li>нарушение обмена веществ (в т.ч. избыточный вес);</li>
                            <li>остеохондроз, сколиоз позвоночника;</li>
                            <li>первичные  остеоартрозы (особенно крупных суставов);</li>
                            <li>неврозы;</li>
                            <li>нейроциркуляторная дистония;</li>
                            <li>бессонница;</li>
                            <li>запоры;</li>
                            <li>как метод физиопрофилактики и др.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    Курс лечения состоит из 10-20 процедур продолжительностью 2-5 минут каждая, проводимых ежедневно 
                    или через день. 
                    </p>
                </div>
            </div>";
    }
}
