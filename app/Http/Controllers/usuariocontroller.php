<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tipousuario;

class usuariocontroller extends Controller
{




public function crearusuario(Request $request)
{

 $input = $request->all();
 User::create($input);
 dd("USUARIO CREADO");


}

}
