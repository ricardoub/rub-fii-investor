<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fii extends Model
{
    use HasFactory;

    protected $fillable = [

        'administradora_id',
        'tipo_id',
        'segmento_id',

        'codigo',
        'nome',
        'descricao',
        'caracteristicas',
        'cnpj',
        'data_inicio',
        'data_termino',
        'dia_data_com',
        'url_fundsexplorer',
        'taxa_de_administracao',
        'taxa_de_gestao',
        'taxa_de_performance',

    ];

    public function tipo()
    {
        return $this->belongsTo(TipoFii::class);
    }

    public function segmento()
    {
        return $this->belongsTo(SegmentoFii::class);
    }

    public function administradora()
    {
        return $this->belongsTo(AdministradoraFii::class);
    }
}
