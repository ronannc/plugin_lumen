<?php

namespace ronannc\plugin_lumen;

use Illuminate\Support\ServiceProvider;


class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register()
    {

    }
}

