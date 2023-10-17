<?php

namespace App\Services\Fiis;

use App\Models\Fiis\AdministradoraFii;
use App\Models\Fiis\DividendoFii;
use App\Models\Fiis\Fii;
use App\Models\Fiis\SegmentoFii;
use App\Models\Fiis\TipoFii;
use Illuminate\Support\Facades\Log;

class FiiDBService {

    public function fii_create($request)
    {
        $fii = Fii::create($request);
        return $fii;
    }
    public function fii_getAll() 
    {
        $fiis = Fii::orderBy('codigo', 'asc')->get();
        return $fiis;
    }
    public function fii_getById($id)
    {
        $fii = Fii::where('id', $id)->first();
        return $fii;
    }
    public function fii_getNew()
    {
        $fii = new Fii;

        return $fii;
    }


    public function administradoraFii_getAll()
    {
        $administradoras = AdministradoraFii::orderBy('nome', 'ASC')->get();

        return $administradoras;
    }

    public function dividendoFii_getById_joinFii($id)
    {
        $dividendos = DividendoFii::select('*', 'fiis.codigo as fii_codigo')
            ->leftJoin('fiis', 'fii_id', '=', 'fiis.id')
            ->where('fii_id', '=', $id)
            ->orderby('competencia', 'desc')
            ->orderBy('codigo', 'asc')
            ->get();

        return $dividendos;
    }


    public function tipoFii_getAll()
    {
        $tipos = TipoFii::orderBy('nome', 'ASC')->get();

        return $tipos;
    }


    public function segmentoFii_getAll()
    {
        $segmentos = SegmentoFii::orderBy('nome', 'ASC')->get();

        return $segmentos;
    }

}