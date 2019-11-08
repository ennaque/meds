<?php


namespace Ennq\MedsTheme;


use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\ExampleSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Illuminate\Support\Facades\DB;

class MedsThemeSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run()
    {
        DB::statement('ALTER TABLE default_pages_default_pages_translations MODIFY content MEDIUMTEXT;');
        DB::statement('ALTER TABLE default_pages_pages_translations MODIFY title MEDIUMTEXT;');
        DB::statement('ALTER TABLE `default_pages_pages_translations` ADD FULLTEXT(`title`);');
        DB::statement('ALTER TABLE `default_pages_default_pages_translations` ADD FULLTEXT(`content`);');
        DB::statement('ALTER TABLE `default_posts_default_posts_translations` ADD FULLTEXT(`content`);');
        DB::statement('ALTER TABLE `default_posts_posts_translations` ADD FULLTEXT(`title`);');
        DB::table('pages_default_pages')->truncate();
        DB::table('pages_default_pages_translations')->truncate();
        DB::table('pages_pages')->truncate();
        DB::table('pages_pages_translations')->truncate();

        $this->call(ExampleSeeder::class);
    }
}
