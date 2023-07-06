<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaQuirofano extends Model
{
    use HasFactory;

    protected $fillable = [
        'fechaHora',
        'cantidadHoras',
        'tipoIntervencion',
        'procedimiento',
        'idDoctor',
        'idPaciente',
        'idQuirofano',
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

    public function quirofano()
    {
        return $this->hasOne('App\Models\Quirofano', 'id', 'idQuirofano');
    }

    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'idPersonal');
    }
}
