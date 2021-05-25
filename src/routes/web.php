<?php

/**
 * Rota de listagem de parcelas de venda
 */
use Illuminate\Support\Facades\Route;

Route::get( 'plots-sale', [ \ronannc\plugin_lumen\Http\Controllers\PlotsSaleControllers::class, 'index' ] );
