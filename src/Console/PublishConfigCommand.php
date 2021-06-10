<?php

namespace Ronannc\PluginLumen\Console;

use Illuminate\Console\Command;
use Ronannc\PluginLumen\Console\Helpers\Publisher;

class PublishConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'plugin_lumen:publish-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info('Publish config files');

        (new Publisher($this))->publishFile(
            realpath(__DIR__.'/..').'/config/plugin_lumen.php',
            base_path('config'),
            'plugin_lumen.php'
        );
    }
}
