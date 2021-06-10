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
//        $this->publishes([
//            __DIR__ . '/config/config.php' => $this->app->configPath('config.php'),
//        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configFolderPath = $this->app->basePath(self::CONFIG_FOLDER_NAME);

        if (!is_dir($configFolderPath)) {
            throw new FileNotFoundException("The config folder is missing.\nCreate it on the root folder of your project and add the config files there.");
        }

        collect(scandir($configFolderPath))->each(function ($file) {
            $this->app->configure(basename($file, '.php'));
        });

        //Register Our Package routes
        include __DIR__.'/routes/web.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers');
    }


}
