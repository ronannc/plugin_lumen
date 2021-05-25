<?php

namespace Ronannc\PluginLumen;

use Illuminate\Support\ServiceProvider;


class PluginServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php' );
    }

}
