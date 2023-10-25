<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DividendoFii extends Model
{
    protected $table = 'fiis_dividendos';

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

    /**
     * Get/Set the attributes.
     */
    protected function valorMes1(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function valorMes3(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function valorMes6(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function valorMes12(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function valorDesdeIpo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn ($value) => number_format((float) $value, 2, '.', ','),
        );
    }

    protected function percentualMes1(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function percentualMes3(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function percentualMes6(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function percentualMes12(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
    protected function percentualDesdeIpo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? number_format($value, 2, ',', '.') : null,
            set: fn (string $value) => number_format(str_replace(",", '.', $value), 2, '.', ','),
        );
    }
}
