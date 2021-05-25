<?php

namespace ronannc\plugin_lumen\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ronannc\plugin_lumen\Services\PlotsSaleService;

class PlotsSaleControllers extends Controller
{
    protected $service;

    /**
     * PlotsSaleControllers constructor.
     *
     * @param PlotsSaleService $service
     */
    public function __construct(PlotsSaleService $service)
    {
        $this->service = $service;
    }

    /**
     * Função responsavel por listar as vendas e suas parcelas
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        //recuperando filtros
        $params = $request->all();

        //chamada para o serviço fazer a requisição http com os parametros passados
        return $this->service->getPlotsSale($params);
    }
}
