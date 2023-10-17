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
    private $fs;
    private $db;

    public function __construct(
        FormatService $formatService
        ,FiiDBService $dbService
    )
    {
        $this->fs = $formatService;
        $this->db = $dbService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiis = $this->db->fii_getAll();

        return view('fiis.index', compact('fiis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fii = $this->db->fii_getNew();
        $fii->administradora_id = 0;
        $fii->segmento_id = 0;
        $fii->tipo_id = 0;

        $administradoras = $this->db->administradoraFii_getAll();
        $segmentos = $this->db->segmentoFii_getAll();
        $tipos = $this->db->tipoFii_getAll();

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
        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $fii = $this->db->fii_create($requestAll);

        return redirect()->route('fiis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fii = $this->db->fii_getById($id);

        return view('fiis.show', compact('fii'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fii = $this->db->fii_getById($id);
        $fii = $this->setModelFields_toBR_fromEN($fii);

        $administradoras = $this->db->administradoraFii_getAll();
        $segmentos = $this->db->segmentoFii_getAll();
        $tipos = $this->db->tipoFii_getAll();

        //$dividendos = $this->db->dividendoFii_getById_joinFii();
        //$dividendos = []; //DividendoFii::where('fii_id', $fii->id)->orderBy('competencia', 'ASC')->get();
        //$rendimentos = []; //RendimentoFii::where('fii_id', $fii->id)->orderBy('competencia', 'ASC')->get();

        Log::debug($fii);
        Log::debug($fii->dividendos);
        Log::debug($fii->rendimentos);

        return view('fiis.edit', [
            'fii' => $fii,
            'tipos' => $tipos,
            'segmentos' => $segmentos,
            'administradoras' => $administradoras,
            //'dividendos' => $dividendos,
            //'rendimentos' => $rendimentos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestAll = $this->setRequesFields_toEN_fromBR($request->all());

        $fii = $this->db->fii_getById($id);
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
        $request['data_inicio'] = $this->fs->formatData_toEN_fromBR($request['data_inicio']);

        return $request;
    }
    private function setModelFields_toBR_fromEN($model)
    {
        $model->data_inicio = $this->fs->formatData_toBR_fromEN($model->data_inicio);

        return $model;
    }
}
