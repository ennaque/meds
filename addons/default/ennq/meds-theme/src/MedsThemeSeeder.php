<?php


namespace Ennq\MedsTheme;


use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Anomaly\PostsModule\Post\PostRepository;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder3;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder4;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder5;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder6;
use Ennq\MedsTheme\Seeders\PagesSeeders\Seeder7;
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
            Seeder3::class,
            Seeder4::class,
            Seeder5::class,
            Seeder6::class,
            Seeder7::class
        ]);
    }

    private function truncate(): void
    {
        DB::table('pages_default_pages')->truncate();
        DB::table('pages_default_pages_translations')->truncate();
        DB::table('pages_pages')->truncate();
        DB::table('pages_pages_translations')->truncate();

        $this->pages->truncate();
    }
}
