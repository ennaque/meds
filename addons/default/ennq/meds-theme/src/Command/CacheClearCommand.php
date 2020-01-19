<?php

namespace Ennq\MedsTheme\Command;


use Illuminate\Console\Command;
use Ennq\MedsTheme\Service\Cache;

class CacheClearCommand extends Command
{
    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'meds:cache:clear';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'Cleaning up the cash of Redis.';


    /**
     * Handle the command.
     *
     * @param Cache $cache
     * @return void True on success and false on failure.
     */
    public function handle(Cache $cache): void
    {
        $this->info('Cache cleaning...');
        if ($cache->clear()){
            $this->info('OK');
        } else {
            $this->info('FAIL');
        }
    }
}
