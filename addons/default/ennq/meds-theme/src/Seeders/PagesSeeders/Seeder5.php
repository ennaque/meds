<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;

use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

class Seeder5 extends Seeder
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
    public function run(): void
    {
        $type = $this->types->findBySlug('default');
        $content = $this->getContent();
        $this->pages->create(
            [
                'ru'           => [
                    'title' => 'Еединый центр телефонных звонков',
                ],
                'slug'         => 'singlephonecenter',
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
'<!-- Main Content -->
<div class="clear"></div>
		

<p><span style="font-size: 12.16px; line-height: 1.3em; text-align: justify;">В  ГБУЗ  МО Красногорская городская больница № 2  (детская поликлиника № 1,  детская поликлиника № 2, Архангельская, Путилковская  амбулатории, медпункты в микрорайоне Павшинская пойма и пос. Новый, детское инфекционное отделение)</span></p>
<p style="text-align: center;"><strong>открылся Call центр (единый центр телефонных звонков)</strong></p>
<p style="text-align: center;"><strong> с многоканальным телефоном </strong></p>
<p style="text-align: center;"><span style="font-size: medium;"><strong><span style="font-size: large;">8 (495) 150 20 14</span></strong></span></p>
<p style="text-align: center;"><span style="font-size: medium;"><strong><span style="font-size: large;">8 (800) 550 50 30</span></strong></span></p>
<p><strong> </strong></p>
<p> </p>
<p><strong>Обратившись по этому телефону Вы можете получить:</strong></p>
<p>- информацию по организации и распорядку работы структурных</p>
<p>подразделений ЛПУ</p>
<p>- информацию  о порядке прикрепления к лечебному учреждению</p>
<p>и врачу;</p>
<p>- информацию по приему врачей;</p>
<p>- информацию о выдаче тех или иных справок, заключений;</p>
<p>- информацию о порядке получения полиса обязательного</p>
<p>медицинского страхования;</p>
<p>-  информацию о порядке направлений  на консультации к</p>
<p>специалистам данного ЛПУ и в другие ЛПУ;</p>
<p>- информацию по льготному лекарственному обеспечению;</p>
<p>- информацию по обеспечению льготным детским питанием;</p>
<p>- консультацию врача  по маршрутизации пациента;</p>
<p>- консультации по различным правовым аспектам при оказании</p>
<p>медицинской помощи;</p>
<p>-  записи  на прием к врачу поликлиники или вызову врача на дом</p>
<p> </p>
<!-- End Main Content -->';
    }
}
