<?php


namespace Ennq\MedsTheme;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PostsModule\Post\PostRepository;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder12;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder13;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder4;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder5;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder7;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder10;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder11;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder17;
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
            Seeder4::class,
            Seeder5::class,
            Seeder6::class,
            Seeder7::class,
            Seeder8::class,
            Seeder10::class,
            Seeder11::class,
            Seeder12::class,
            Seeder13::class,
            Seeder17::class
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
