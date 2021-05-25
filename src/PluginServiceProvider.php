<?php

namespace Ronannc\PluginLumen;

use Illuminate\Support\ServiceProvider;


class PluginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register Our Package routes
        include __DIR__.'/routes/web.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers');
    }


}
