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
        $input = $request->all();
        User::create($input);
        return Redirect::route('inicio');
    }

}
