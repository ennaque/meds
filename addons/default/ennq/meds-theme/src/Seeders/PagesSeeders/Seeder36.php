<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder36 extends BaseSeeder
{

    public static function getTitle(): string
    {
        return 'Подводный душ-массаж';
    }

    public static function getSlug(): string
    {
        return '/underdouchemassage';
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
                        Гидромассаж считается одной из лучших водолечебных процедур, в которой удачно сочетаются 
                        воздействие на организм общей теплой ванны и массажа.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Процедура гидромассажа оказывает тонизирующее, общеукрепляющее и противовоспалительное действие, 
                        улучшает питание и кровоснабжение тканей, увеличивает объем движений, ускоряет жировой обмен, 
                        что приводит к уменьшению подкожно-жирового слоя и явлений целлюлита, улучшает общее состояние 
                        кожи и повышает тонус мышц.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Показания:
                        <ul>
                            <li>заболевания и травмы опорно-двигательного аппарата (остеохондрозы, остеоартрозы, травмы 
                            и их последствия, др. заболевания);</li>
                            <li>повреждения и заболевания периферической нервной системы (радикулиты, плекситы, 
                            невропатии, полинейропатии и др.);</li>
                            <li>нарушение обмена веществ (в т.ч. избыточный вес);</li>
                            <li>ДЦП;</li>
                            <li>патологический климакс;</li>
                            <li>в качестве тонизирующего средства пациентам с астеноневротическими состояниями, 
                            вегетососудистыми дистониями, неврозами;</li>
                            <li>в качестве общеукрепляющей, закаливающей процедуры;</li>
                            <li>в косметических целях (улучшение тургора кожи, борьба с целлюлитом)</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    Курс лечения состоит из 10-20 процедур.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Для получения информации о порядке назначения и проведения процедуры обращаться к 
                    врачам-физиотерапевтам в 
                    <b>кабинеты №№ 203, 207, 206.</b>
                    </p>
                </div>
            </div>";
    }
}
