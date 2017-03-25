<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipousuario extends Model
{

    public function user()
    {
    return $this->belongsTo('App\User');
    }

}
