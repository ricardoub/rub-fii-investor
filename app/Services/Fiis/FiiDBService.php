<?php

namespace App\Services\Fiis;

use App\Models\Fiis\AdministradoraFii;
use App\Models\Fiis\DividendoFii;
use App\Models\Fiis\Fii;
use App\Models\Fiis\RendimentoFii;
use App\Models\Fiis\SegmentoFii;
use App\Models\Fiis\TipoFii;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FiiDBService {

    public function create_fii(Request $request)
    {
        $fii = Fii::create($request->all());

        return $fii;
    }
    public function create_administradoraFii(Request $request)
    {
        $administradora = AdministradoraFii::create($request->all());

        return $administradora;
    }

    public function update_fii(Request $request, $id)
    {
        $fii = $this->getById_fii($id);
        $fii->update($request->all());

        return $fii;
    }
    public function update_administradoraFii(Request $request, $id)
    {
        $administradora = $this->getById_administradoraFii($id);
        $administradora->update($request->all());

        return $administradora;
    }



    public function getAll_fii()
    {
        $fiis = Fii::orderBy('codigo', 'asc')->get();
        return $fiis;
    }
    public function getAll_administradoraFii()
    {
        $administradoras = AdministradoraFii::orderBy('nome', 'ASC')->get();

        return $administradoras;
    }
    public function getAll_dividendoFii_joinFii($filters)
    {
        $dividendos = DividendoFii::select(
                'fiis_dividendos.*'
               ,'fiis.codigo'
            )
            ->leftJoin('fiis', 'fiis_dividendos.fii_id', '=', 'fiis.id')
            ->orderby('fiis_dividendos.competencia', 'desc')
            ->orderBy('fiis.codigo', 'asc')
            ->where(function($query) use ($filters){
                if ($filters['form']['fii']['codigo']) {
                    $query->where('fiis.codigo', '=', $filters['form']['fii']['codigo']);
                }
            })
            ->get();

        return $dividendos;
    }
    public function getAll_rendimentoFii_joinFii($filters)
    {
        $rendimentos = RendimentoFii::select(
                'fiis_rendimentos.*'
               ,'fiis.codigo'
            )
            ->leftJoin('fiis', 'fiis_rendimentos.fii_id', '=', 'fiis.id')
            ->orderby('fiis_rendimentos.competencia', 'asc')
            ->orderBy('fiis.codigo', 'asc')
            ->where(function($query) use ($filters){
                if ($filters['form']['fii']['codigo']) {
                    $query->where('fiis.codigo', '=', $filters['form']['fii']['codigo']);
                }
            })
            ->get();

        return $rendimentos;
    }
    public function getAll_segmentoFii()
    {
        $segmentos = SegmentoFii::orderBy('nome', 'ASC')->get();

        return $segmentos;
    }

    public function getAll_tipoFii()
    {
        $tipos = TipoFii::orderBy('nome', 'ASC')->get();

        return $tipos;
    }

    public function getById_fii($id)
    {
        $fii = Fii::where('id', $id)->first();

        return $fii;
    }
    public function getById_administradoraFii($id)
    {
        $administradora = AdministradoraFii::where('id', $id)->first();

        return $administradora;
    }
    public function getById_dividendoFii_joinFii($id)
    {
        $dividendos = DividendoFii::select(
                'fiis_dividendos.*',
                'fiis.codigo'
            )
            ->leftJoin('fiis', 'fiis_dividendos.fii_id', '=', 'fiis.id')
            ->where('fiis_dividendos.fii_id', '=', $id)
            ->orderby('fiis_dividendos.competencia', 'desc')
            ->orderBy('fiis.codigo', 'asc')
            ->get();

        return $dividendos;
    }

    public function getNew_fii()
    {
        $fii = new Fii;
        $fii->administradora_id = 0;
        $fii->segmento_id = 0;
        $fii->tipo_id = 0;

        return $fii;
    }
    public function getNew_administradoraFii()
    {
        $administradora = new AdministradoraFii();

        return $administradora;
    }
    public function getNew_dividendoFii()
    {
        $dividendo = new DividendoFii;
        $dividendo->administradora_id = 0;
        $dividendo->tipo_id = 0;
        $dividendo->segmento_id = 0;

        return $dividendo;
    }


}
