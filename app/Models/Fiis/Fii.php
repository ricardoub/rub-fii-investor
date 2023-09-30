<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fii extends Model
{
    use HasFactory;

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
