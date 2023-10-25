<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
//use App\Models\Fiis\AdministradoraFii;
//use App\Models\Fiis\DividendoFii;
//use App\Models\Fiis\Fii;
//use App\Models\Fiis\RendimentoFii;
//use App\Models\Fiis\SegmentoFii;
//use App\Models\Fiis\TipoFii;
use App\Services\Common\FormatService;
use App\Services\Fiis\FiiDBService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FiiController extends Controller
{
    //private $fs;
    private $dbFii;

    public function __construct(
        //FormatService $formatService
        FiiDBService $dbService
    )
    {
        //$this->fs = $formatService;
        $this->dbFii = $dbService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiis = $this->dbFii->getAll_fii();

        return view('fiis.index', compact('fiis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fii = $this->dbFii->getNew_fii();

        $administradoras = $this->dbFii->getAll_administradoraFii();
        $segmentos = $this->dbFii->getAll_segmentoFii();
        $tipos = $this->dbFii->getAll_tipoFii();

        return view('fiis.create', [
            'fii' => $fii,
            'administradoras' => $administradoras,
            'segmentos' => $segmentos,
            'tipos' => $tipos,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fii = $this->dbFii->create_fii($request);

        return redirect()->route('fiis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fii = $this->dbFii->getById_fii($id);

        return view('fiis.show', compact('fii'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fii = $this->dbFii->getById_fii($id);

        $administradoras = $this->dbFii->getAll_administradoraFii();
        $segmentos = $this->dbFii->getAll_segmentoFii();
        $tipos = $this->dbFii->getAll_tipoFii();

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
        $fii = $this->dbFii->update_fii($request, $id);

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
