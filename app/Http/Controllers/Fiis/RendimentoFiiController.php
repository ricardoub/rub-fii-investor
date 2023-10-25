<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\Fii;
use App\Models\Fiis\RendimentoFii;
use App\Services\Common\FormatService;
use App\Services\Fiis\FiiDBService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RendimentoFiiController extends Controller
{
    private $fs;
    private $dbFii;
    private $filters;

    public function __construct(
        FormatService $formatService,
        FiiDBService $fiiDBService
    )
    {
        $this->fs = $formatService;
        $this->dbFii = $fiiDBService;
        $this->setFilters();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendimentos = $this->dbFii->getAll_rendimentoFii_joinFii($this->filters);

        return view('fiis.rendimentos.index', [
            'rendimentos' => $rendimentos,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rendimento = new RendimentoFii;
        $rendimento->fii_id      = $this->filters['form']['fii']['id'];
        $rendimento->competencia = $this->filters['form']['fii']['competencia'];

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

        //$requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $rendimento = RendimentoFii::create($request->all());

        //return redirect()->route('rendimentos.index');
        return redirect()->route('rendimentos.create');
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
        $rendimento = RendimentoFii::find($id);
        //$rendimento = $this->setModelFields_toBR_fromEN($rendimento);

        $fiis = $this->dbFii->getAll_fii();

        return view('fiis.rendimentos.edit', [
            'rendimento' => $rendimento,
            'fiis' => $fiis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestAll = $request->all(); //$this->setRequesFields_toEN_fromBR($request->all());

        $rendimento = RendimentoFii::find($id);
        $rendimento->update($requestAll);

        return redirect()->route('rendimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function setFilters()
    {
        $this->filters['form']['fii']['id']          = env('FILTERS_FORM_FII_ID');
        $this->filters['form']['fii']['codigo']      = env('FILTERS_FORM_FII_CODIGO');
        $this->filters['form']['fii']['competencia'] = env('FILTERS_FORM_FII_COMPETENCIA');

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
