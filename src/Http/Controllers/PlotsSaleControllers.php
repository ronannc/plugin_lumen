<?php

namespace Ronannc\PluginLumen\Http\Controllers;


use Illuminate\Support\Facades\Http;

class PlotsSaleControllers extends Controller
{

    /**
     * Função responsavel por listar as vendas e suas parcelas
     *
     * @return mixed
     */
    public static function index(\Illuminate\Http\Request $request)
    {
        $params = $request->all();
        //recuperando as credenciais de acesso (client_code, client_key) configuradas no env
        $client_key  = config( 'plugin_ronan.CLIENT_KEY' );
        $client_code = config( 'plugin_ronan.CLIENT_CODE' );
        $base_uri    = config( 'plugin_ronan.BASE_URI' );

        //requisição http /vendas
        return Http::withHeaders( [
            'Content-Type' => 'application/json',
            'Client-Code'  => $client_code,
            'Client-key'   => $client_key,
        ] )->get( $base_uri . 'vendas', [
            'nu_referencia' => $params['nu_referencia'] ?? null,
            'nu_venda' => $params['nu_venda'] ?? null,
            'page' => $params['page'] ?? null,
            'per_page' => $params['per_page'] ?? null,
            'dt_venda' => $params['dt_venda'] ?? null,
        ] )->json();
    }
}
