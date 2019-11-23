<?php


namespace Ennq\MedsTheme\Seeders\PagesSeeders;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PagesModule\Type\Contract\TypeRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;

class Seeder28 extends Seeder
{

    public static function getTitle(): string
    {
        return 'Клинико-диагностическая лаборатория';
    }

    public static function getSlug(): string
    {
        return '/cdiagl';
    }

    public static function getParentSlug(): ?string
    {
        return MenuSeeder::SLUG_CDIAGL;
    }

    protected function getContent(): string
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
