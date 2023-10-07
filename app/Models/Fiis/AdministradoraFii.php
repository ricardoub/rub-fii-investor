<?php

namespace App\Models\Fiis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdministradoraFii extends Model
{
    protected $table = 'fiis_administradoras';

    use HasFactory;

    protected $fillable = [
        'nome',
        'cnpj',
        'telefone',
        'email',
        'site',
    ];

    public function fiis()
    {
        return $this->hasMany(Fii::class);
    }
}
