<?php

namespace Banks;

use Illuminate\Support\ServiceProvider;

class BanksServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/banks.php', 'banks');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/banks.php' => config_path('banks.php'),
        ], 'config');
    }
}
