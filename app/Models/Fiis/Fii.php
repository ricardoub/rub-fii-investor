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
        'prazo_duracao',
        'dia_data_com',
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
