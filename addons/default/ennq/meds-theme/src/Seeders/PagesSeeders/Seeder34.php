<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder34 extends Seeder
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
                    'title' => 'Жемчужные ванны',
                ],
                'slug'         => '/jewelbath',
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
