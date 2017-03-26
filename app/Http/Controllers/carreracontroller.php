<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carrera;


class carreracontroller extends Controller
{
    public function crearcarrera(Request $request)
    {
        $input = $request->all();
        carrera::create($input);
        dd("CARRERA CREADO");
    }
}
