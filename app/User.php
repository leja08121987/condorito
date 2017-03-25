<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cedula','telefono','direccion','fechaIngreso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipousuario()
    {
    return $this->hasOne('App\tipousuario');
    }

    public function usuariocarrera()
    {
    return $this->hasOne('App\usuariocarrera');
    }

}
