<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder35 extends Seeder
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
                    'title' => 'Лимфодренаж',
                ],
                'slug'         => '/lymphdrain',
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
                <div>
                    <p style='padding-bottom: 7px'>
                        Лимфодренаж (пневмомассаж, прессотерапия)– метод физиотерапии, который способствует выведению 
                        избыточной жидкости и продуктов обмена из межклеточного пространства, улучшает циркуляцию лимфы.
                    </p>
                    <p style='padding-bottom: 7px'>
                        В процессе жизнедеятельности организма происходит снижение тонуса лимфатических и кровеносных 
                        сосудов. Замедление их работы приводит к задержке жидкости в межклеточном пространстве вместе с 
                        содержащимися в ней токсическими продуктами обмена, что вызывает  развитие различных 
                        патологических состояний. Лимфодренаж активно воздействует на всю лимфатическую систему: 
                        восстанавливает сосудистый тонус, способствует нормальной циркуляции и равномерному 
                        распределению лимфы, выводит токсины  и стимулирует защитные функции организма.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Курс лимфодренажа восстанавливает водно-солевой баланс, улучшает  венозный и капиллярный 
                        кровоток, состояние сосудов, предотвращает   прогрессирование варикозной болезни, венозной 
                        недостаточности, устраняет отеки,  повышает тонус и упругость кожи, нормализует  вес. После 
                        прохождения процедуры пациенты ощущают прилив бодрости, жизненных сил, легкость во всем теле.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Показания:
                        <ul>
                            <li>варикозная болезнь, хроническая венозная недостаточность;</li>
                            <li>диабетические ангиопатии;</li>
                            <li>отеки (посттравматические, лимфатические), профилактика лимфовенозного застоя;</li>
                            <li>психоэмоциональное, нервно-мышечное напряжение;</li>
                            <li>снижение эластичности кожи, целлюлит;</li>
                            <li>нарушения обмена веществ в организме (в т.ч. избыточный вес).</li>
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
