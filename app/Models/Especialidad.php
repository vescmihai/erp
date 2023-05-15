<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    
    public function cita(){
        return $this->hasMany('App\Models\Cita','idCita','id');
    }

    public function doctores(){
        return $this->hasMany('App\Models\Doctor','idEspecialidad','id');
    }
}
