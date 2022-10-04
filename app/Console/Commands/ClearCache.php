<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all caches';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('clear-compiled');
        //$this->call('auth:clear-resets');
        $this->call('config:clear');
        $this->call('event:clear');
        $this->call('route:clear');
        $this->call('cache:clear');
        $this->call('view:clear');
        $this->call('optimize:clear');
        
        return 0;
    }
}
