<?php

use Illuminate\Support\Facades\Route;
use Ronannc\PluginLumen\Http\Controllers\PlotsSaleControllers;

/**
 * Rota de listagem de parcelas de venda
 */
Route::get( '/plots-sale', [ PlotsSaleControllers::class, 'index' ] );
