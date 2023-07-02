<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'tutor',
        'nroTutor',
        'idUser',
    ];

    public function cita(){
        return $this->hasMany('App\Models\Cita','idPaciente','id');
    }
    public function usuario(){
        return $this->hasOne('App\Models\User','id','idUser');
    }

}

