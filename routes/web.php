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

     Route::get ('reporte',[
        'as' => 'reporte',
        'uses'=> 'Lugarcontroller@reporte'
    ]);
});
