<?php

namespace Ennq\MedsTheme\Command;


use Anomaly\Streams\Platform\Addon\Addon;
use Illuminate\Console\Command;
use Ennq\MedsTheme\Service\Cache as redisCache;

class CacheCleanCommand extends Command
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'meds:cache:clean';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'Cleaning up the cash of Redis.';


    /**
     * Handle the command.
     *
     * @return bool True on success and false on failure.
     */
    public function handle(): void
    {
        $cache = new redisCache();
        $this->info('Cache cleaning...');
        if ($cache->clear())
            $this->info('OK');
        else
            $this->info('It looks like some shit has happened');
    }
}
