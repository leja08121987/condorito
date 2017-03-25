<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrera extends Model
{


    protected $fillable = [
        'idCarrera','nombreCarrera','ruta','totalRecorrido','dificultad','fechaCompetencia',

    ];
           public function usuariocarrera()
        {
        return $this->belongsTo('App\usuariocarrera');
        }

}
