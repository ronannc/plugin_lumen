<?php

namespace ronannc\plugin_lumen;

use Illuminate\Support\ServiceProvider;


class   PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        include __DIR__ . '/web.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('ronannc/plugin_lumen/PlotsSaleControllers');
    }
}

