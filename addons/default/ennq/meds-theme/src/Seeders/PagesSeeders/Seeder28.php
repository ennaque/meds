<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder28 extends Seeder
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
                    'title' => 'Клинико-диагностическая лаборатория',
                ],
                'slug'         => '/p28',
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
    <p style="padding-bottom: 7px">
        Клинико-диагностическая лаборатория нашей больницы предлагает широкий спектр лабораторных исследований. Клинико-диагностическая лаборатория оснащена стандартизированным парком анализаторов последнего поколения, выпущенных мировыми лидерами в лабораторном приборостроении. При взятии крови применяются <b>только одноразовые вакуумные системы SARSTEDT (производства Германии)</b>.
    </p>
    <p style="padding-bottom: 7px">
        Высокое качество наших услуг достигается за счет автоматизации лабораторных процессов, что минимизирует «человеческий фактор». Технология и результаты проводимых исследований постоянно контролируется с использованием российских и международных систем оценки качества, что подтверждают соответствующие сертификаты (PREVICAL, ФСВОК).
    </p>
</div>
';
    }
}
