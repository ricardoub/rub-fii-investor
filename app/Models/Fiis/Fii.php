<?php

namespace App\Models\Fiis;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'nome_pregao',
        'razao_social',
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

    public function dividendos()
    {
        return $this->hasMany(DividendoFii::class);
    }

    public function rendimentos()
    {
        return $this->hasMany(RendimentoFii::class);
    }

    /**
     * Get/Set the attributes.
     */
    protected function dataInicio(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::parse($value)->format('d/m/Y') : null,
            set: fn (string|null $value) => $value ? Carbon::createFromFormat('d/m/Y', $value)->toDateString() : null,
        );
    }
    protected function dataTermino(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::parse($value)->format('d/m/Y') : null,
            set: fn (string|null $value) => $value ? Carbon::createFromFormat('d/m/Y', $value)->toDateString() : null,
        );
    }
}
