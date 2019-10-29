<?php

namespace Ennq\MedsTheme\Command;


use Anomaly\Streams\Platform\Addon\Addon;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class ImageMigrationCommand extends Command
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'meds:images:warmup';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'Move images from addon dir into public.';

    protected $addon;

    public function __construct(Addon $addon)
    {
        parent::__construct();
        $this->addon = $addon;
    }

    /**
     * Handle the command.
     *
     */
    public function handle(Filesystem $filesystem)
    {
        $this->info($this->addon->getPath());

        $ans = $filesystem->copyDirectory('/var/www/addons/default/ennq/meds-theme/resources/img/seed',
            public_path('app/default/assets/file-module/local/images/test'));
//        $ans = $filesystem->copyDirectory(__DIR__ . '../../resources/img/seed', public_path('app/default/assets/file-module/local/images/test'));

        $this->info((string)$ans);

//        $this->info('started ' . __DIR__ . '../../resources/img/seed');
//        File::copyDirectory(__DIR__ . '../../resources/img/seed', public_path('app/default/assets/file-module/local/images'));
//        $this->info('end ' . public_path('app/default/assets/file-module/local/images'));
    }

//    /**
//     * Get the console command options.
//     *
//     * @return array
//     */
//    protected function getOptions()
//    {
//        return [
//            ['force', null, InputOption::VALUE_NONE, 'Override.'],
//        ];
//    }
}
