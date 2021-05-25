<?php

use Illuminate\Support\Facades\Route;
use ronannc\plugin_lumen\Http\Controllers\PlotsSaleControllers;

/**
 * Rotas web do plugin
 */
Route::group(['middleware' => ['web']], function() {


    /**
     * Rota de listagem de parcelas de venda
     */
    Route::get( 'plots-sale', [PlotsSaleControllers::class, 'index'] )->name('plots-sale.index');
});
