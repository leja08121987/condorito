<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carrera;
use App\usuariocarrera;
use Redirect;


class carreracontroller extends Controller
{
    public function crearcarrera(Request $request)
    {
        $input = $request->all();
        carrera::create($input);
        return Redirect::route('inicio');
    }



    public function jugadorcarrara(Request $request)
    {
        $Jugacarre = new usuariocarrera();
        $Jugacarre->idUsers=$request->idUsers;
        $Jugacarre->idCarrera=$request->idCarrera;
        $Jugacarre->save();
        return Redirect::route('inicio');
    }


      public function reporte(Request $request)
    {

        //usuario,inicio,fin
        $consultafecha = DB::select('select * from users inner join usuariocarrera ON (users.idUsers = usuariocarrera.idUsers)
                                    inner join carrera ON (usuariocarrera.idCarrera=carrera.idCarrera)');
        dd($consultafecha);
    }






}
