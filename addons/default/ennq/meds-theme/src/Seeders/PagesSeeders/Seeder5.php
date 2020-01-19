<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder5 extends BaseSeeder
{

    public const PAGE_SLUG = '/singlephonecenter';
    public const PAGE_TITLE = 'Единый центр телефонных звонков';

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_MAIN;
    }

    public static function getTitle(): string
    {
        return self::PAGE_TITLE;
    }

    public static function getSlug(): string
    {
        return self::PAGE_SLUG;
    }

    protected function getContent(): string
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
