<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'idDoctor',
    ];

    public function doctores()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'idDoctor');
    }

    public function cita(){
        return $this->hasMany('App\Models\Cita','idCita','id');
    }
}
