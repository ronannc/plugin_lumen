<?php

/**
 * Rota de listagem de parcelas de venda
 */
//Route::get( 'plots-sale', [ \ronannc\plugin_lumen\Http\Controllers\PlotsSaleControllers::class, 'index' ] );
$this->app->get('plots-sale', 'ronannc\plugin_lumen\PlotsSaleControllers@index');
