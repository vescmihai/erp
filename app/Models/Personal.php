<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Personal extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $table = 'personal';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'sexo',
        'edad',
        'fechaNac',
        'telefono',
        'direccion',
        'estado',
        'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cita(){
        return $this->hasMany('App\Models\Cita','idPersonal','id');
    }

    public function reserva_quirofano(){
        return $this->hasMany('App\Models\ReservaQuirofano','idPersonal','id');
    }
}
