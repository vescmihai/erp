<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HojaConsulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnostico',
        'indicación',
        'proximaConsulta',
    ];

    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'idReceta');
    }

}

