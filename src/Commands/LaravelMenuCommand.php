<?php

namespace Meetjet\LaravelMenu\Commands;

use Illuminate\Console\Command;

class LaravelMenuCommand extends Command
{
    public $signature = 'laravel-menu';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
