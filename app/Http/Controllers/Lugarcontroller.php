<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lugarcontroller extends Controller
{
    public function index()
{
 return view('index');
}
    {
    public function inicio()
{
 return view('inicio');
}

public function jugadores()
{
 return view('jugadores');
}
    public function carrera()
{
 return view('carrera');
}
    public function jugadorCarrera()
{
 return view('jugadorCarrera');
}
}
