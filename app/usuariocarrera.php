<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariocarrera extends Model
{

     protected $table ="usuariocarrera";

   public function carrera()
    {
    return $this->hasOne('App\carrera');
    }
}
