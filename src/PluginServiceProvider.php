<?php

namespace Ronannc\PluginLumen;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Filesystem\FileNotFoundException;


class PluginServiceProvider extends ServiceProvider
{
    const CONFIG_FOLDER_NAME = 'config';


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

        $configPath = __DIR__.'/config/config.php';
        $this->mergeConfigFrom($configPath, 'config');

        $this->app->singleton('command.plugin_lumen.publish-config', function () {
            return new PublishConfigCommand();
        });

        $this->commands(
            'command.plugin_lumen.publish-config',
        );

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers');
    }


}
