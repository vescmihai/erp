<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $fillable = [ 'idHojadeConsulta',
    ];

    public function hojaConsulta()
    {
        return $this->hasOne('App\Models\HojaConsulta', 'id', 'idHojadeConsulta');
    }

    public function recetamedica(){
        return $this->hasMany('App\Models\RecetaMedica','idReceta','id');
    }
}
