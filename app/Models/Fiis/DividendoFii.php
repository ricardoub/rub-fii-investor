<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DividendoFii extends Model
{
    protected $table = 'fiis_dividendyields';

    use HasFactory;

    protected $fillable = [

        'fii_id',
        'competencia',
        'valor_mes_1',
        'valor_mes_3',
        'valor_mes_6',
        'valor_mes_12',
        'valor_desde_ipo' ,
        'percentual_mes_1',
        'percentual_mes_3',
        'percentual_mes_6',
        'percentual_mes_12',
        'percentual_desde_ipo',

    ];

    public function fii()
    {
        return $this->belongsTo(Fii::class);
    }
}
