<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecetaMedica extends Model
{
    use HasFactory;

    protected $fillable = [
        'catnidad',
        'dosis',
        'frecuencia',
        'idReceta',
        'idMedicamento',
    ];

    public function receta()
    {
        return $this->hasOne('App\Models\Receta', 'id', 'idReceta');
    }

    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'idMedicamento');
    }
}
