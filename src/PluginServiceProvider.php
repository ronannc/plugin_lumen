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
        include __DIR__ . '/web.php';
        $this->app->make('Ronan\PluginLumen\PlotsSaleController');
    }
}

