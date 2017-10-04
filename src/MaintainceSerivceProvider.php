<?php

namespace Mingalevme\Lumen\Maintaince;

use Illuminate\Support\ServiceProvider;

class MaintainceSerivceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            'Mingalevme\Lumen\Maintaince\Console\UpCommand',
            'Mingalevme\Lumen\Maintaince\Console\DownCommand',
        ]);
    }
}
