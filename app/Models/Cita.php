<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'motivo',
        'fecha',
        'citaConfirmada',
        'idConsulta',
        'idEspecialidad',
        'idDoctor',
        /*'idPaciente',*/
        'idAdministrativo',
        'idUsuario',
        'idConsultorio',
    ];

    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'idConsulta');
    }

    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'idEspecialidad');
    }

    public function doctores()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'idDoctor');
    }

    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'idPaciente');
    }

    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'idAdministrativo');
    }
    public function usuario(){
        return $this->hasOne('App\Models\User','id','idUsuario');
    }
    public function Agenda(){
        return $this->hasMany('App\Models\Agenda','idCita','id');
    }

    public function consultorio(){
        return $this->belongsTo('App\Models\Consultorio','idConsultorio');
    }


}
