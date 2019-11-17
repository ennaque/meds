<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder33 extends Seeder
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
                    'title' => 'Дозированное вытяжение позвоночника',
                ],
                'slug'         => '/syphonback',
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
                        В нашей поликлинике вы можете пройти курс дозированного вытяжения позвоночника и 
                        вибрационно-механического массажа с помощью современной установки “Ормед-профессионал”.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Во время процедуры происходит механическое воздействие на проблемный участок позвоночника, 
                        способствующее дозированному раздвижению двух сопряженных позвонков. Одновременно с вытяжением 
                        под действием роликов-массажеров проявляются элементы мануальной терапии: локальное растяжение 
                        позвоночника, исправление имеющихся искривлений . В результате  исчезает сдавливание нервных 
                        окончаний, расположенных возле позвоночника,  снимается мышечный спазм,  восстанавливается 
                        нормальная подвижность позвонков, нормализуется функция  многих внутренних органов.
                    </p>
                    <p style='padding-bottom: 7px'>
                        Дозированное программное вытяжение и роликовый вибромассаж позвоночника позволяет существенно 
                        уменьшить грыжевое выпячивание и способствует устранению боли в спине и пояснице, связанных с 
                        дегенеративно-дистрофическими изменениями в позвоночных двигательных  сегментах.
                    </p>
                    <p style='padding-bottom: 7px'>
                        За счет общерелаксирующего воздействия нормализуется психо-эмоциональное состояние пациентов, 
                        улучшается сон, повышается работоспособность.
                    </p>
                    <p style='padding-bottom: 7px'>
                    Показания к лечению:
                        <ul>
                            <li>остеохондроз позвоночника (в том числе дискогенный радикулит, грыжи дисков)</li>
                            <li>профилактика развития остеохондроза, предупреждение обострения  хронического процесса</li>
                            <li>малоподвижный образ жизни, нарушение осанки, бессонница, стрессы</li>
                            <li>посттравматические изменения позвоночно-двигательных сегментов</li>
                            <li>вегетативно-висцеральные состояния</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                    Курс лечения состоит из 6-8-10 процедур.
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
