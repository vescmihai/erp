<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaDeEmergencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'sector_id',
        'capacidad',
        'camasDisponibles',
        /*'personalMedico',
        'pacientesActuales',*/
        'estado',
    ];

    public function sector()
    {
        return $this->belongsTo('App\Models\Sector', 'sector_id', 'id');
    }
}
