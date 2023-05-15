<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];
    
     public function sala(){
        return $this->hasMany('App\Models\Sala','idSector','id');
    }
}
