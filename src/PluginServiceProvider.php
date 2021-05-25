<?php

namespace Ronannc\PluginLumen;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class PluginServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => '',
            'middleware' => '',
        ];
    }
}
