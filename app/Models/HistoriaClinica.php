<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    use HasFactory;

    protected $fillable = [
        'enfermedad',
        'manifestaciones',
        'fechaRegistro',
        'estadoPaciente',
        'idExpediente',
        'idAdministrativo',
    ];

    public function expediente()
    {
        return $this->belongsTo('App\Models\Expediente', 'idExpediente');
    }

    public function personal()
    {
        return $this->belongsTo('App\Models\Personal', 'idAdministrativo');
    }
}
