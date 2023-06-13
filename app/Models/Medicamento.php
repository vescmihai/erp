<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];

    public function recetamedica(){
        return $this->hasMany('App\Models\RecetaMedica','idMedicamento','id');
    }
}
