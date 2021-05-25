<?php

namespace Ronannc\PluginLumen;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class PlotsSaleController extends BaseController
{

    /**
     * PlotsSaleControllers constructor.
     *
     */
    public function __construct()
    {
    }

    /**
     * Função responsavel por listar as vendas e suas parcelas
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //recuperando as credenciais de acesso (client_code, client_key) configuradas no env
        $client_key  = env( 'CLIENT_KEY', 'FC-SB-15' );
        $client_code = env( 'CLIENT_CODE', '6ea297bc5e294666f6738e1d48fa63d2' );
        $base_uri    = env( 'BASE_URI', 'https://api-sandbox.fpay.me/' );

        //requisição http /parcelas
        return Http::withHeaders( [
            'Content-Type' => 'application/json',
            'Client-Code'  => $client_code,
            'Client-key'   => $client_key,
        ] )->get( $base_uri . 'vendas', [
            //                'nu_referencia' => $params['nu_referencia'] ?? null,
            //                'nu_venda' => $params['nu_venda'] ?? null,
            //                'page' => $params['page'] ?? null,
            //                'per_page' => $params['per_page'] ?? null,
            //                'dt_venda' => $params['dt_venda'] ?? null,
        ] )->json();
    }
}
