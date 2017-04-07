<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tipousuario;
use Redirect;

class usuariocontroller extends Controller
{




    public function crearusuario(Request $request)
    {
        //$input = $request->all();
        //User::create($input);

        $persona = new User();
       // dd($persona);
        $persona->name=$request->name;
        $persona->cedula=$request->cedula;
        $persona->telefono=$request->telefono;
        $persona->direccion=$request->direccion;
        $persona->email=$request->email;
        $persona->idTipoUsuario=$request->idTipoUsuario;

        $persona->fechaIngreso=$request->fechaIngreso;
        $persona->password=bcrypt($request->password);
        $persona->save();
        return Redirect::route('inicio');
    }


   /*  0 => "name"
    1 => "email"
    2 => "password"
    3 => "cedula"
    4 => "telefono"
    5 => "direccion"
    6 => "fechaIngreso"
    7 => "idTipoUsuario"
    */
}
