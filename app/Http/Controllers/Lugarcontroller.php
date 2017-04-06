<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lugarcontroller extends Controller
{





public function crearcarrerausuario(Request $request)
{
 dd("saSasa");
}








    public function index()
{
 return view('index');
}
    public function inicio()
{
 return view('inicio');
}

public function jugadores()
{
 return view('registroJugadores');
}
    public function carrera()
{
 return view('registroCarrera');
}
    public function jugadorCarrera()
{
 return view('JUGADORCARRERAA');
}
    public function reporte()
{
 return view('reportes');
}





}
