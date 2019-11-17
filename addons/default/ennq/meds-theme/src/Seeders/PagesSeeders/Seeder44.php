<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder44 extends Seeder
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
                    'title' => 'Памятка для родителей',
                ],
                'slug'         => '/forparents',
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
                        <b>Уважаемые мамы и папы! У вас родился малыш! Поздравляем с этим замечательным событием!</b> 
                        В ближайшие 18 лет Вам предстоит посещать детскую поликлинику со здоровым или больным ребенком. 
                        <b>Общение с участковым врачом должно быть основано на взаимном доверии. Помогите доктору 
                        качественно оказать помощь вашему малышу.</b>
                    </p>
                    <p style='padding-bottom: 7px'>
                        <b>НА ДОМУ:</b>
                        <ul>
                            <li>Вызовы на дом должны быть обоснованными.</li>
                            <li>Если малыш заболел, вызывайте врача пораньше, с утра.</li>
                            <li>Если у вас не работает домофон или дверной звонок, доктор к больному не попадет! 
                            Врач не обеспечивается сотовой связью.</li>
                            <li>Доктор на вызовах не разувается ( так же как милиция и пожарные ). Готовьтесь к визиту: 
                            уберите любимый ковер, застелите пол, предложите доктору бахилы (они продаются в аптеках) 
                            и т. п. </li>
                            <li>Приготовьте доктору мыло и ЧИСТОЕ полотенце или влажные салфетки для рук.</li>
                            <li>Для осмотра полости рта ЗАРАНЕЕ приготовьте ложку с плоской, гладкой ручкой.</li>
                            <li>Уберите домашних животных, особенно собак.</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                        <b>НА ПРИЕМЕ:</b>
                        <ul>
                            <li>Всегда берите в поликлинику страховой полис. Исключение: острое заболевание ребенка.</li>
                            <li>Собираясь на прием к врачу, предварительно позвоните в поликлинику, уточните расписание 
                            (врач может заболеть или находиться в отпуске). Прием может быть изменен.</li>
                            <li>Возьмите с собой в поликлинику: питьевую воду для ребенка, пару пеленок, запасные 
                            памперсы, книжку или игрушку. </li>
                            <li>У нас в поликлинике всегда тепло. Собираясь к врачу, оденьте малыша так, что бы можно 
                            было легко и быстро раздеть его. Процесс быстрого одевания- раздевания нервирует ребенка и 
                            затягивает прием. Краткая информация: участковый врач обслуживает то 900 до 1100 детей. 
                            Ежедневно проводиться 3-х часовой прием и обслуживание вызовов, (в любую погоду, любое 
                            количество, и даже пешком и без лифта).</li>
                        </ul>
                    </p>
                    <p style='padding-bottom: 7px'>
                        Ваш педиатр отвечает только за качество лечения. Он не виноват, что вы пришли не в те часы 
                        приема, что вы забыли дома полис, не взяли ребенку воды и туалетную бумагу, что в поликлинике 
                        в очереди и т.п. Если вы выбрали наблюдение в городской поликлинике, будьте вежливы и 
                        терпеливы по отношению к своему врачу и окружающим.
                    </p>
                    <p style='padding-bottom: 7px'>
                        <b>Желаем здоровья вашей семье! Спасибо за помощь в нашей работе!</b>
                    </p>
                </div>
            </div>";
    }
}
