<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix'=> 'condorito'], function () {

    Route::get ('inicio',[
        'as' => 'inicio',
        'uses'=> 'Lugarcontroller@inicio'
    ]);

    Route::get ('registroJugadores',[
        'as' => 'registroJugadores',
        'uses'=> 'Lugarcontroller@jugadores'
    ]);

Route::get ('registroCarrera',[
        'as' => 'registroCarrera',
        'uses'=> 'Lugarcontroller@carrera'
    ]);

    Route::get ('jugadorCarrera',[
        'as' => 'jugadorCarrera',
        'uses'=> 'Lugarcontroller@jugadorCarrera'
    ]);

        Route::get ('login',[
        'as' => 'login',
        'uses'=> 'Lugarcontroller@login'
    ]);


});


    Route::POST ('registrarusuario',[
        'as' => 'registrarusuario',
        'uses'=> 'usuariocontroller@crearusuario'
    ]);

     Route::get ('reporte',[
        'as' => 'reportevista',
        'uses'=> 'carreracontroller@reportevista'
    ]);


    Route::POST ('registrarcarrera',[
        'as' => 'registrarcarrera',
        'uses'=> 'carreracontroller@crearcarrera'
    ]);


    Route::POST ('jugadorcarrara',[
        'as' => 'jugadorcarrara',
        'uses'=> 'carreracontroller@jugadorcarrara'
    ]);


  Route::POST ('reporte',[
        'as' => 'reporte',
        'uses'=> 'carreracontroller@reporte'
    ]);



Route::POST ('listar',[
        'as' => 'listar',
        'uses'=> 'carreracontroller@listar'
    ]);



Route::POST ('loguinentrada',[
        'as' => 'loguinentrada',
        'uses'=> 'LoginController@login'
    ]);

Route::get ('salir',[
        'as' => 'salir',
        'uses'=> 'LoginController@salir'
    ]);



