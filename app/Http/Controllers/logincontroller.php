<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Session;
use Redirect;
class logincontroller extends Controller
{

    public function login(Request $request)
    {


        //dd($request);

        //$encriptar=bcrypt($request);

        if (Auth::attempt(['name' => $request->username, 'password' =>  $request->password],"true"))
        {

            $user_data = Auth::user();
            Session::put('nombre', $request->username);
            return Redirect::route('inicio');
        }

        else
        {
            return view('index');
        }
    }



       public function salir()
    {
            Auth::logout();
            Session::forget('nombre');
            return view('index');
    }






}
