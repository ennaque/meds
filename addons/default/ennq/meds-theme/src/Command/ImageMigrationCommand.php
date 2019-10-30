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


    /**
     * Handle the command.
     * @param Filesystem $filesystem
     */
    public function handle(Filesystem $filesystem): void
    {
        $fromPath = base_path('/addons/default/ennq/meds-theme/resources/img/seed');
        $destinationPath = public_path('app/default/files-module/local/images');

        $this->info('moving from ' . $fromPath);
        $this->info('to ' . $destinationPath);

        $result = $filesystem->copyDirectory(
            $fromPath,
            $destinationPath
        );

        if ($result) {
            $this->info('Moved successfully');

            return;
        }

        $this->info('Something went wrong');
    }
}
