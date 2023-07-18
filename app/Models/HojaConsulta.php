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

    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'idReceta');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'id', 'idDoctor');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Dcotor', 'id', 'idUsuario');
    }

}

