<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quirofano extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'idSala',
    ];

    public function sala()
    {
        return $this->hasOne('App\Models\Sala', 'id', 'idSala');
    }

    public function reserva_quirofano(){
        return $this->hasMany('App\Models\ReservaQuirofano','idQuirofano','id');
    }
}
