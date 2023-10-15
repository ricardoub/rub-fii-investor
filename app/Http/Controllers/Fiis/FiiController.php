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
        $requestAll = $request->all();
        if ($request['data_inicio']) {
            $dtInicio = explode('/', $requestAll['data_inicio']);
            $request['data_inicio'] = "$dtInicio[2]-$dtInicio[1]-$dtInicio[0]";
        }

        $fii = Fii::create($request->all());

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
        Log::debug($fii);

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
        //ddd($request);

        $fii = Fii::find($id);
        $fii->update($request->all());

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
}
