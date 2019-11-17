<?php


namespace Ennq\MedsTheme;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PostsModule\Post\PostRepository;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

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
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder38;

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
        $this->truncate();

        $this->call([
            Seeder2::class,
            Seeder3::class,
            Seeder4::class,
            Seeder5::class,
            Seeder6::class,
            Seeder7::class,
            Seeder8::class,
            Seeder9::class,
            Seeder10::class,
            Seeder11::class,
            Seeder12::class,
            Seeder13::class,
            Seeder14::class,
            Seeder17::class,
            Seeder18::class,
            Seeder21::class,
            Seeder22::class,
            Seeder24::class,
            Seeder25::class,
            Seeder26::class,
            Seeder27::class,
            Seeder38::class,
        ]);
    }

    private function truncate(): void
    {
        DB::statement('ALTER TABLE default_pages_default_pages_translations MODIFY content MEDIUMTEXT;');
        DB::table('pages_default_pages')->truncate();
        DB::table('pages_default_pages_translations')->truncate();
        DB::table('pages_pages')->truncate();
        DB::table('pages_pages_translations')->truncate();

        $this->pages->truncate();
    }
}
