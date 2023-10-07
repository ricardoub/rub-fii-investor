<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Models\Fiis\AdministradoraFii;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdministradoraFiiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administradoras = AdministradoraFii::all();

        return view('fiis.administradoras.index', [
            'administradoras' => $administradoras,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $administradora = AdministradoraFii::find($id);
        Log::debug($administradora);

        //$tipos = TipoFii::orderBy('nome', 'ASC')->get();
        //$segmentos = SegmentoFii::orderBy('nome', 'ASC')->get();
        //$administradoras = AdministradoraFii::orderBy('nome', 'ASC')->get();

        return view('fiis.administradoras.edit', [
            'administradora' => $administradora,
            //'tipos' => $tipos,
            //'segmentos' => $segmentos,
            //'administradoras' => $administradoras,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $administradora = AdministradoraFii::find($id);
        $administradora->update($request->all());

        return redirect()->route('administradoras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
