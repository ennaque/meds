<?php

namespace  Ennq\MedsTheme\Seeders\PagesSeeders;


use Ennq\MedsTheme\Seeders\BaseSeeders\BaseSeeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder9 extends BaseSeeder
{

    public const PAGE_SLUG = '/listofdrugs';
    public const PAGE_TITLE = 'Перечень препаратов';

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
            '<div>
                <div class="second-title">
                    <h2>
                        Перечень препаратов
                    </h2>
                </div>
                <div>
                    <p style="padding-bottom: 7px">
                    Перечень лекарственных средств и изделий медицинского назначения, необходимых для 
                    обеспечения отдельных категорий граждан, отпускаемых при амбулаторном лечении по 
                    рецептам врачей бесплатно или с 50-процентной скидкой со свободных цен.
                    </p>
                    <p style="padding-bottom: 7px">
                        <a href="/images/stories/lekarka/lgoty.zip">Препараты для льготных категорий (файл для загрузки)</a>
                    </p>
                    <p style="padding-bottom: 7px">
                        Перечень жизненно необходимых и важнейших лекарственных средств и изделий медицинского назначения, 
                        необходимых для оказания стационарной и скорой медицинской помощи.    
                    </p>
                    <p style="padding-bottom: 7px">
                        <a href="/images/stories/lekarka/stat.zip">Препараты для стационаров (файл для загрузки)</a>
                    </p>
                    <p style="padding-bottom: 7px">
                        Перечень жизненно необходимых и важнейших лекарственных препаратов и изделий медицинского назначения, 
                        необходимых для оказания стационарной медицинской помощи, 
                        медицинской помощи в дневных стационарах всех типов, а также скорой и неотложной медицинской помощи.
                    </p>
                    <p style="padding-bottom: 7px">
                        <a href="/images/stories/lekarka/per_preporat.pdf">Жизненно необходимые препараты (файл для загрузки)</a>
                    </p>  
                </div>
            </div>';
    }
}
