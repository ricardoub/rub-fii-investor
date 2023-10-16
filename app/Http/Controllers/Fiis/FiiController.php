<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\AdministradoraFii;
use App\Models\Fiis\Fii;
use App\Models\Fiis\SegmentoFii;
use App\Models\Fiis\TipoFii;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiis = Fii::orderBy('codigo', 'asc')->get();

        return view('fiis.index', compact('fiis'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fii = new Fii;
        $fii->administradora_id = 0;
        $fii->tipo_id = 0;
        $fii->segmento_id = 0;

        $tipos = TipoFii::orderBy('nome', 'ASC')->get();
        $segmentos = SegmentoFii::orderBy('nome', 'ASC')->get();
        $administradoras = AdministradoraFii::orderBy('nome', 'ASC')->get();

        return view('fiis.create', [
            'fii' => $fii,
            'tipos' => $tipos,
            'segmentos' => $segmentos,
            'administradoras' => $administradoras,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $fii = Fii::create($requestAll);

        return redirect()->route('fiis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        ddd(__METHOD__);
        $fii = Fii::find($id);

        return view('fiis.show', compact('fii'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fii = Fii::find($id);
        $fii = $this->setModelFields_toBR_fromEN($fii);

        $tipos = TipoFii::orderBy('nome', 'ASC')->get();
        $segmentos = SegmentoFii::orderBy('nome', 'ASC')->get();
        $administradoras = AdministradoraFii::orderBy('nome', 'ASC')->get();

        return view('fiis.edit', [
            'fii' => $fii,
            'tipos' => $tipos,
            'segmentos' => $segmentos,
            'administradoras' => $administradoras,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $fii = Fii::find($id);
        $fii->update($requestAll);

        return redirect()->route('fiis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ddd(__METHOD__);
        //
    }


    private function setRequesFields_toEN_fromBR($request)
    {
        if ($request['data_inicio']) {
            $request['data_inicio'] = $this->formatData_toEN_fromBR($request['data_inicio']);
        }

        return $request;
    }
    private function setModelFields_toBR_fromEN($model)
    {
        if ($model->data_inicio) {
            $model->data_inicio = $this->formatData_toBR_fromEN($model->data_inicio);
        }

        return $model;
    }
}
