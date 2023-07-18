<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'nombre',
        'duracion',
        'idPaciente',
        'idMedicamento',
        'idDoctor',
    ];

    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'idPaciente');
    }

    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'idMedicamento');
    }

    public function doctores(){
        return $this->hasMany('App\Models\Doctor','id','idDoctor');
    }
}
