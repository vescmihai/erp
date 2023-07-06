<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = [
        'nroSala',
        'capacidad',
        'tipo',
        'idSector',
    ];

    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id', 'idSector');
    }

    public function doctores()
    {
        return $this->hasMany('App\Models\Doctor', 'idSala', 'id');
    }

    public function internaciones()
    {
        return $this->hasMany('App\Models\Internacion', 'idSala', 'id');
    }

    public function quirofano()
    {
        return $this->hasMany('App\Models\Quirofano', 'idSala', 'id');
    }

    public function reserva_quirofano()
    {
        return $this->hasMany('App\Models\ReservaQuirofano', 'idSala', 'id');
    }
}
