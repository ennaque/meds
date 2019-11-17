<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder38 extends Seeder
{
    /**
     * The page repository.
     *
     * @var PageRepositoryInterface
     */
    protected $pages;

    /**
     * The types repository.
     *
     * @var TypeRepositoryInterface
     */
    protected $types;

    /**
     * Create a new PageSeeder instance.
     *
     * @param PageRepositoryInterface $pages
     * @param TypeRepositoryInterface $types
     */
    public function __construct(PageRepositoryInterface $pages, TypeRepositoryInterface $types)
    {
        parent::__construct();
        $this->pages = $pages;
        $this->types = $types;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Галоингаляции',
                ],
                'slug'         => '/haloingulations',
                'entry'        => $type->getEntryModel()->create(
                    [
                        'ru' => [
                            'content' => $content,
                        ]
                    ]
                ),
                'type'         => $type,
                'enabled'      => true,
                'theme_layout' => 'theme::layouts/default.twig',
            ]
        )->allowedRoles()->sync([]);
    }

    private function getContent(): string
    {
        return
            "<div>
                <div class='second-title'>
                    <h2>
                        Галоингаляции
                    </h2>
                </div>
                <div>
                    <p style='padding-bottom: 7px'>
                        Галоингаляции – это метод физиотерапевтического лечения, основанный на вдыхании сухого аэрозоля 
                        природной каменной соли, моделирующий лечебный микроклимат соляной пещеры.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Галоаэрозоль снижает вязкость бронхиального секрета, нормализует дренажную функцию бронхов 
                        и функцию реснитчатого эпителия верхних дыхательных путей. Оказывает бактерицидное и 
                        бактериостатическое действие на микрофлору дыхательных путей, обладает местным 
                        противовоспалительным действием, стимулирует активность макрофагов, повышая местный иммунитет.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Галоингаляционная терапия при острой патологии, особенно при затяжном ее течении, 
                        ускорят процесс выздоровления, повышает эффективность медикаментозной терапии и позволяет 
                        уменьшить  медикаментозную нагрузку на пациента. При хронических заболеваниях галоингаляции 
                        способствуют продлению периода ремиссии, снижают тяжесть обострений, а при своевременном 
                        назначении предупреждают развитие обострения.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Опыт применения галоаэрозольной терапии с помощью настольных ингаляторов показал, что по 
                        эффективности этот метод не уступает терапии в условиях галокамеры.
                    </p>
                    <p style='padding-bottom: 7px'>
                        <b>Показания:</b>
                    </p>
                    <p style='padding-bottom: 7px'>
                    1. Хроническая бронхолегочная патология в фазе затихающего, вялотекущего обострения, ремиссии 
                    и острые заболевания органов дыхания с затяжным течением:
                        <ul>
                            <li>хронический необструктивный и обструктивный бронхит;</li>
                            <li>бронхиальная астма;</li>
                            <li>поллиноз;</li>
                            <li>бронхоэктатическая болезнь;</li>
                            <li>муковисцидоз;</li>
                            <li>острый бронхит с затяжным течением;</li>
                            <li>пневмония с затяжным течением.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    2. Заболевания верхних дыхательных путей:
                        <ul>
                            <li>вазомоторный и аллергический ринит;</li>
                            <li>острый и хронический риносинусит;</li>
                            <li>полипоз носа;</li>
                            <li>хронический фарингит, тонзиллит;</li>
                            <li>аденоиды, аденоидит.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    3. С целью профилактики при следующих состояниях угрозы развития ХНЗЛ:
                        <ul>
                            <li>частые острые респираторные заболевания (3 и более раз в год);</li>
                            <li>повторные острые бронхиты и пневмонии в течение последних двух лет;</li>
                            <li>производственный контакт с поллютантами;</li>
                            <li>кашель, связанный с курением;</li>
                            <li>аллергические реакции дыхательных путей, обусловленные длительным воздействием различных раздражающих соединений;</li>
                            <li>начальные обструктивные нарушения по данным функции внешнего дыхания.</li>
                        </ul>
                    </p>
                </div>
            </div>";
    }
}
