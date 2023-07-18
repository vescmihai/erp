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
        'idDoctor',
        'idUsuario',

    ];

    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUsuario');
    }
    public function doctor()
    {
        return $this->hasMany('App\Models\User', 'id', 'idDoctor');
    }

}

