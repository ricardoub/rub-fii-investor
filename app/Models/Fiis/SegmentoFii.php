<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegmentoFii extends Model
{
    protected $table = 'fiis_segmentos';

    use HasFactory;

    public function fiis()
    {
        return $this->hasMany(Fii::class);
    }
}
