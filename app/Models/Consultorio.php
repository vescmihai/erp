<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;
    protected $table='consultorios';

    protected $fillable = [
        'estado',
        'nro_consultorio',
        'idSala',
        'idDoctor',
        'idPaciente',
        'idTurno'
    ];

    public function sala()
    {
        return $this->belongsTo('App\Models\Sala', 'idSala');
    }

    public function doctor()
    {
        return $this->belongsTo('App\Models\Doctor', 'idDoctor');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Models\User' ,'idPaciente');
    }

    public function turno()
    {
        return $this->belongsTo('App\Models\Turno' ,'idTurno');
    }

}
