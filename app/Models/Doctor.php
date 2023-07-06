<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'formacion',
        'cargo',
        'idEspecialidad',
        'idSala',
    ];

    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'idEspecialidad');
    }

    public function sala()
    {
        return $this->hasOne('App\Models\Sala', 'id', 'idSala');
    }

    public function agenda(){
        return $this->hasMany('App\Models\Agenda','idDoctor','id');
    }

    public function cita(){
        return $this->hasMany('App\Models\Cita','idDoctor','id');
    }

    public function consulta(){
        return $this->hasMany('App\Models\Consulta','idDoctor','id');
    }

    public function reserva_quirofano(){
        return $this->hasMany('App\Models\ReservaQuirofano','idDoctor','id');
    }
}
