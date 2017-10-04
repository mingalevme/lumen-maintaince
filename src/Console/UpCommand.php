<?php

namespace Mingalevme\Lumen\Maintaince\Console;

use Illuminate\Console\Command;
use Mingalevme\Lumen\Maintaince\Maintaince;

class UpCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'up';
    
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Bring the application out of maintenance mode";
    
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $filename = Maintaince::getMaintainceModeFilename();
        unlink($filename);
        $this->info('Application is now live.');
    }
}
