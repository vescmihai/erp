<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoInternacion',
        'idSala',
    ];

    public function sala()
    {
        return $this->hasOne('App\Models\Sala', 'id', 'idSala');
    }
}
