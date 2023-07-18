<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaConsultorio extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechaHora',
        'cantidadHoras',
        'tipoIntervencion',
        'procedimiento',
        'idDoctor',
        'idPaciente',
        'idConsultorio',
        'idPersonal',
    ];

    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'idDoctor');
    }

    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'idPaciente');
    }

    public function consultorio()
    {
        return $this->hasOne('App\Models\Consultorio', 'id', 'idConsultorio');
    }

    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'idPersonal');
    }
}
