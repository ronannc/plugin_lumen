<?php

use Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers;

/**
 * Rota de listagem de parcelas de venda
 */
$this->app->router->get( '/plots-sale', [ PlotsSaleControllers::class, 'index' ] );
