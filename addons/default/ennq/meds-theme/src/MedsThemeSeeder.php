<?php


namespace Ennq\MedsTheme;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PostsModule\Post\PostRepository;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

use Ennq\MedsTheme\Seeders\DefinitionsSeeders\CdiaglSeeder2831;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\DispensarySeeder2122;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MainSeeder29;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\MappingSeeder2427;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\OldSubdivision1720;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\PhysterSeeder3238;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\YoungSubdivisionSeeder1016;
use Ennq\MedsTheme\Seeders\Menu\MenuSeeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder2;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder3;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder4;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder5;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder7;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder8;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder9;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder10;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder11;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder12;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder13;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder14;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder17;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder18;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder21;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder22;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder24;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder25;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder26;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder27;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder28;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder29;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder32;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder33;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder34;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder35;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder36;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder37;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder40;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder44;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder45;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder50;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder51;

use Illuminate\Support\Facades\DB;

class MedsThemeSeeder extends Seeder
{
    /** @var PageRepositoryInterface */
    protected $pages;
    /** @var PostRepository */
    protected $posts;

    public function __construct(PageRepositoryInterface $pages, PostRepository $posts)
    {
        parent::__construct();
        $this->pages = $pages;
        $this->posts = $posts;
    }

    /**
     * Run the seeder.
     */
    public function run(): void
    {
        $this->truncatePages();
        $this->truncateMeu();

        $this->call([
            MenuSeeder::class,
            MainSeeder29::class,
            Seeder2::class,
            Seeder3::class,
            Seeder4::class,
            Seeder5::class,
            Seeder6::class,
            Seeder7::class,
            Seeder8::class,
            Seeder9::class,
            YoungSubdivisionSeeder1016::class,
            Seeder10::class,
            Seeder11::class,
            Seeder12::class,
            Seeder13::class,
            Seeder14::class,
            OldSubdivision1720::class,
            Seeder17::class,
            Seeder18::class,
            DispensarySeeder2122::class,
            Seeder21::class,
            Seeder22::class,
            MappingSeeder2427::class,
            Seeder24::class,
            Seeder25::class,
            Seeder26::class,
            Seeder27::class,
            CdiaglSeeder2831::class,
            Seeder28::class,
            Seeder29::class,
            PhysterSeeder3238::class,
            Seeder32::class,
            Seeder33::class,
            Seeder34::class,
            Seeder35::class,
            Seeder36::class,
            Seeder37::class,
            Seeder38::class,
            Seeder40::class,
            Seeder44::class,//TODO
            Seeder45::class,//TODO
            Seeder50::class,//TODO
            Seeder51::class,//TODO
        ]);
    }

    private function truncateMeu(): void
    {
        DB::table('navigation_menus')->truncate();
        DB::table('navigation_links')->truncate();
        DB::table('navigation_menus_translations')->truncate();
    }

    private function truncatePages(): void
    {
        DB::statement('ALTER TABLE default_pages_default_pages_translations MODIFY content MEDIUMTEXT;');
        DB::table('pages_default_pages')->truncate();
        DB::table('pages_default_pages_translations')->truncate();
        DB::table('pages_pages')->truncate();
        DB::table('pages_pages_translations')->truncate();

        $this->pages->truncate();
    }
}
