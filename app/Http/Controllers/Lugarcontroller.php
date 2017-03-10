<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lugarcontroller extends Controller
{
    public function index()
{
 return view('index');
}
public function jugadores()
{
 return view('jugadores');
}
}
