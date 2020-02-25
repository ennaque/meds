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
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\PayrollSeeder4042;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\FaqSeeder4346;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\ProfexamSeeder4748;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\YoungSubdivisionSeeder1016;
use Ennq\MedsTheme\Seeders\DefinitionsSeeders\DocumentSeeder5173;
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
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder30;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder31;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder32;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder33;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder34;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder35;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder36;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder37;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder40;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder41;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder42;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder43;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder44;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder45;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder46;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder47;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder48;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder50;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder51;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder52;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder53;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder54;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder55;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder56;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder57;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder58;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder59;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder60;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder61;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder62;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder63;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder64;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder65;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder66;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder67;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder68;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder69;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder70;
//use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder71;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder72;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder73;

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
            Seeder30::class,
            Seeder31::class,
            PhysterSeeder3238::class,
            Seeder32::class,
            Seeder33::class,
            Seeder34::class,
            Seeder35::class,
            Seeder36::class,
            Seeder37::class,
            Seeder38::class,
            PayrollSeeder4042::class,
            Seeder40::class,
            Seeder41::class,
            Seeder42::class,
            FaqSeeder4346::class,
            Seeder43::class,
            Seeder44::class,
            Seeder45::class,
            Seeder46::class,
            ProfexamSeeder4748::class,
            Seeder47::class,
            Seeder48::class,
            //Seeder49::class,
            Seeder50::class,//TODO
            DocumentSeeder5173::class,
            Seeder51::class,
            Seeder52::class,
            Seeder53::class,
            Seeder54::class,
            Seeder55::class,
            Seeder56::class,
            Seeder57::class,
            Seeder58::class,
            Seeder59::class,
            //Seeder60::class,
            //Seeder61::class,
            Seeder62::class,
            Seeder63::class,
            //Seeder64::class,
            //Seeder65::class,
            //Seeder66::class,
            //Seeder67::class,
            Seeder68::class,
            Seeder69::class,
            //Seeder70::class,
            //Seeder71::class,
            Seeder72::class,
            Seeder73::class,
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
        DB::statement('ALTER TABLE default_pages_pages_translations MODIFY title MEDIUMTEXT;');
        DB::statement('ALTER TABLE `default_pages_pages_translations` ADD FULLTEXT(`title`);');
        DB::statement('ALTER TABLE `default_pages_default_pages_translations` ADD FULLTEXT(`content`);');
        DB::statement('ALTER TABLE `default_posts_default_posts_translations` ADD FULLTEXT(`content`);');
        DB::statement('ALTER TABLE `default_posts_posts_translations` ADD FULLTEXT(`title`);');
        DB::table('pages_default_pages')->truncate();
        DB::table('pages_default_pages_translations')->truncate();
        DB::table('pages_pages')->truncate();
        DB::table('pages_pages_translations')->truncate();

        $this->pages->truncate();
    }
}
