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

    public function doctores(){
        return $this->hasMany('App\Models\Doctor','idSala','id');
    }
}
