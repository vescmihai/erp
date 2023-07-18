<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerapiaIntensiva extends Model
{
    use HasFactory;

    protected $fillable = [
        'estado',
        'paciente_id',
        'doctor_id',
    ];

    public function paciente(){
        return $this->belongsTo('App\Models\Paciente','paciente_id','id');
    }

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor','doctor_id','id'); 
    }
}
