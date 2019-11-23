<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder50 extends Seeder
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
                    'title' => 'Вакансии',
                ],
                'slug'         => '/vacancy',
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
            '
<div>
    <div class="second-title">
        <h2>
            Вакансии ГБУЗ МО "Красногорская городская больница №2"
        </h2>
    </div>
    <div>
        <h3 style="padding-bottom: 15px; padding-top: 15px">
            Услуги, оказываемые во Взрослой поликлинике №2:
        </h3>
        <table style="width: 100%" id="meds-table" class="table table-striped table-bordered dt-responsive nowrap">
            <tbody>
                <tr>
                    <td>
                        Врач-педиатр<br>
                        участковый<br>
                        З/П 80.000 руб
                    </td>
                    <td>
                        Врач-педиатр<br>
                        З/П 60.000 руб
                    </td>
                    <td>
                        врач-невролог<br>
                        З/П 70.000 руб
                    </td>
                </tr>
                <tr>
                    <td>
                        Врач УЗД<br>
                        З/П 60.000 руб
                    </td>
                    <td>
                        Врач общей практики<br>
                        (семейный врач)<br>
                        З/П 80.000 руб
                    </td>
                    <td>
                        Рентгенолаборант<br>
                        З/П 50.000 руб
                    </td>
                </tr>
                <tr>
                    <td>
                        Медицинская сестра<br>
                        З/П 48.000 руб
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <p style="padding-bottom: 7px">
            По вопросам трудоустройства обращайтесь по телефону 8(495)520-97-84
        </p>
    </div>
</div>
';
    }
}
