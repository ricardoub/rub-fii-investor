<?php

namespace App\Models\Fiis;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
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


    /**
     * Get/Set the attributes.
     */
    protected function dataCom(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::parse($value)->format('d/m/Y') : null,
            set: fn (string $value) => Carbon::createFromFormat('d/m/Y', $value)->toDateString(),
        );
    }
    protected function dataPagamento(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? Carbon::parse($value)->format('d/m/Y') : null,
            set: fn (string $value) => Carbon::createFromFormat('d/m/Y', $value)->toDateString(),
        );
    }
    protected function valorCota(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function valorRendimento(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function dividendYield(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }

}
