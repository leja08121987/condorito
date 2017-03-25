<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariocarrera extends Model
{
   public function carrera()
    {
    return $this->hasOne('App\carrera');
    }
}
