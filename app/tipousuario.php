<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipousuario extends Model
{


 protected $table ="tipousuario";

  protected $fillable = [
        'name', 'email', 'password','cedula','telefono','direccion','fechaIngreso','idTipoUsuario'
    ];



    public function User()
    {
    return $this->hasOne('App\User');
    }

}
