<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;

use App\Models\Fiis\DividendYieldFii;
use App\Models\Fiis\Fii;
use App\Services\Common\FormatService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DividendYieldFiiController extends Controller
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
        $dividendos = DividendYieldFii::select('*', 'fiis.codigo as fii_codigo')
            ->leftJoin('fiis', 'fii_id', '=', 'fiis.id')
            ->orderby('competencia', 'desc')
            ->orderBy('codigo', 'asc')->get();

        return view('fiis.dividendos.index', compact('dividendos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dy = new DividendYieldFii;
        $dy->administradora_id = 0;
        $dy->tipo_id = 0;
        $dy->segmento_id = 0;

        $fiis = Fii::orderBy('codigo', 'asc')->get();

        return view('fiis.dividendos.create', [
            'dy' => $dy,
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

        $dy = DividendYieldFii::create($requestAll);

        return redirect()->route('dividendos.index');

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
        $dy = DividendYieldFii::find($id);
        $dy = $this->setModelFields_toBR_fromEN($dy);

        $fiis = Fii::orderBy('codigo', 'asc')->get();

        return view('fiis.dividendos.edit', [
            'dy' => $dy,
            'fiis' => $fiis,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $dy = DividendYieldFii::find($id);
        $dy->update($requestAll);

        return redirect()->route('dividendos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function setRequesFields_toEN_fromBR($request) {
        $request['valor_mes_1']     = $this->fs->formatNumber_toEN_fromBR($request['valor_mes_1'], 2);
        $request['valor_mes_3']     = $this->fs->formatNumber_toEN_fromBR($request['valor_mes_3'], 2);
        $request['valor_mes_6']     = $this->fs->formatNumber_toEN_fromBR($request['valor_mes_6'], 2);
        $request['valor_mes_12']    = $this->fs->formatNumber_toEN_fromBR($request['valor_mes_12'], 2);
        $request['valor_desde_ipo'] = $this->fs->formatNumber_toEN_fromBR($request['valor_desde_ipo'], 2);

        $request['percentual_mes_1']     = $this->fs->formatNumber_toEN_fromBR($request['percentual_mes_1'], 2);
        $request['percentual_mes_3']     = $this->fs->formatNumber_toEN_fromBR($request['percentual_mes_3'], 2);
        $request['percentual_mes_6']     = $this->fs->formatNumber_toEN_fromBR($request['percentual_mes_6'], 2);
        $request['percentual_mes_12']    = $this->fs->formatNumber_toEN_fromBR($request['percentual_mes_12'], 2);
        $request['percentual_desde_ipo'] = $this->fs->formatNumber_toEN_fromBR($request['percentual_desde_ipo'], 2);

        return $request;
    }

    private function setModelFields_toBR_fromEN($model)
    {
        Log::debug($model);

        $model->valor_mes_1 = $this->fs->formatNumber_toBR_fromEN($model->valor_mes_1, 2);
        $model->valor_mes_3 = $this->fs->formatNumber_toBR_fromEN($model->valor_mes_3, 2);
        $model->valor_mes_6 = $this->fs->formatNumber_toBR_fromEN($model->valor_mes_6, 2);
        $model->valor_mes_12 = $this->fs->formatNumber_toBR_fromEN($model->valor_mes_12, 2);
        $model->valor_desde_ipo = $this->fs->formatNumber_toBR_fromEN($model->valor_desde_ipo, 2);

        $model->percentual_mes_1 = $this->fs->formatNumber_toBR_fromEN($model->percentual_mes_1, 2);
        $model->percentual_mes_3 = $this->fs->formatNumber_toBR_fromEN($model->percentual_mes_3, 2);
        $model->percentual_mes_6 = $this->fs->formatNumber_toBR_fromEN($model->percentual_mes_6, 2);
        $model->percentual_mes_12 = $this->fs->formatNumber_toBR_fromEN($model->percentual_mes_12, 2);
        $model->percentual_desde_ipo = $this->fs->formatNumber_toBR_fromEN($model->percentual_desde_ipo, 2);

        return $model;
    }
}
