<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'idDoctor',
        'idCita',
    ];

    public function doctores(){
        return $this->hasMany('App\Models\Doctor','id','idDoctor');
    }

    public function cita(){
        return $this->hasMany('App\Models\Cita','id','idCita');
    }
}
