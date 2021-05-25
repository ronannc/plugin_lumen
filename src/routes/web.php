<?php

/**
 * Rota de listagem de parcelas de venda
 */
$this->app->router->get( '/plots-sale', 'Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers@index' );
