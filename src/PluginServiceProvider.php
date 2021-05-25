<?php

namespace ronannc\plugin_lumen;

use Illuminate\Support\ServiceProvider;


class PluginServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        //Register Our Package routes
        include __DIR__.'/routes/web.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('ronannc\plugin_lumen\Http\Controllers\PlotsSaleControllers');
    }
}

