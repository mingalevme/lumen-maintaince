<?php

namespace Mingalevme\Lumen\Maintaince\Console;

use Illuminate\Console\Command;
use Mingalevme\Lumen\Maintaince\Maintaince;

class DownCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'down';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Put the application into maintenance mode";
    
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $filename = Maintaince::getMaintainceModeFilename();
        touch($filename);
        $this->comment('Application is now in maintenance mode.');
    }
}
