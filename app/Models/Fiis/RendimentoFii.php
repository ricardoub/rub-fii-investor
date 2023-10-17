<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendimentoFii extends Model
{
    protected $table = 'fiis_rendimentos';

    use HasFactory;

    protected $fillable = [
        'fii_id',
        'competencia',
        'data_com',
        'data_pagamento',
        'valor_cota',
        'valor_rendimento',
        'dividend_yield' ,
    ];

    public function fii()
    {
        return $this->belongsTo(Fii::class);
    }

}
