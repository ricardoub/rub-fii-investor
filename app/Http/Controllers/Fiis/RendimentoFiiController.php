<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\Fii;
use App\Models\Fiis\RendimentoFii;
use App\Services\Common\FormatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RendimentoFiiController extends Controller
{
    private $fs;

    public function __construct(
        FormatService $formatService
    )
    {
        $this->fs = $formatService;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $rendimentos = RendimentoFii::select('*', 'fiis.codigo as fii_codigo')
            ->leftJoin('fiis', 'fii_id', '=', 'fiis.id')
            ->orderby('competencia', 'asc')
            ->orderBy('codigo', 'asc')->get();

        return view('fiis.rendimentos.index', compact('rendimentos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rendimento = new RendimentoFii;
        //$rendimento->administradora_id = 0;
        //$rendimento->tipo_id = 0;
        //$rendimento->segmento_id = 0;

        $fiis = Fii::orderBy('codigo', 'asc')->get();

        return view('fiis.rendimentos.create', [
            'rendimento' => $rendimento,
            'fiis' => $fiis,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::debug($request->all());

        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $rendimento = RendimentoFii::create($requestAll);

        return redirect()->route('rendimentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function setRequesFields_toEN_fromBR($request) {
        $request['data_com']         = $this->fs->formatData_toEN_fromBR($request['data_com']);
        $request['data_pagamento']   = $this->fs->formatData_toEN_fromBR($request['data_pagamento']);
        $request['valor_cota']       = $this->fs->formatNumber_toEN_fromBR($request['valor_cota'], 2);
        $request['valor_rendimento'] = $this->fs->formatNumber_toEN_fromBR($request['valor_rendimento'], 2);
        $request['dividend_yield']   = $this->fs->formatNumber_toEN_fromBR($request['dividend_yield'], 2);

        return $request;
    }

    private function setModelFields_toBR_fromEN($model)
    {
        Log::debug($model);

        $model->data_com         = $this->fs->formatData_toBR_fromEN($model->data_com);
        $model->data_pagamento   = $this->fs->formatData_toBR_fromEN($model->data_pagamento);
        $model->valor_cota       = $this->fs->formatNumber_toBR_fromEN($model->valor_cota, 2);
        $model->valor_rendimento = $this->fs->formatNumber_toBR_fromEN($model->valor_rendimento, 2);
        $model->dividend_yield   = $this->fs->formatNumber_toBR_fromEN($model->dividend_yield, 2);

        return $model;
    }
}
