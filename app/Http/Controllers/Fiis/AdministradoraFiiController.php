<?php

namespace App\Http\Controllers\Fiis;

use App\Http\Controllers\Controller;
use App\Services\Fiis\FiiDBService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdministradoraFiiController extends Controller
{
    private $dbFii;

    public function __construct(
        FiiDBService $dbService
    )
    {
        $this->dbFii = $dbService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administradoras = $this->dbFii->getAll_administradoraFii(); // AdministradoraFii::orderBy('nome', 'asc')->get();

        return view('fiis.administradoras.index', [
            'administradoras' => $administradoras,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $administradora = $this->dbFii->getNew_administradoraFii();

        return view('fiis.administradoras.create', [
            'administradora' => $administradora,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $administradora = $this->dbFii->create_administradoraFii($request);

        return redirect()->route('administradoras.index');
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
        $administradora = $this->dbFii->getById_administradoraFii($id);

        return view('fiis.administradoras.edit', [
            'administradora' => $administradora,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $administradora = $this->dbFii->update_administradoraFii($request, $id);

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
