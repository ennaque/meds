<?php


namespace Ennq\MedsTheme;


use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\ExampleSeeder;

class MedsThemeSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(ExampleSeeder::class);
    }
}
