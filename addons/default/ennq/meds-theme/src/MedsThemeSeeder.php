<?php


namespace Ennq\MedsTheme;


use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\ExampleSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;

class MedsThemeSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(Seeder6::class);
    }
}
