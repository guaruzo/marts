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


Route::get('administrador', function () {
    return view('administrador');
});

Route::get('/welcome', ['as' => 'inicio', function(){return view('welcome');}]);



Route::get('alumnos', 'AlumnoController@formAlumnos');
Route::post('alumnos', 'AlumnoController@store');
Route::get('/lista_alumnos', 'AlumnoController@index');

Route::get('horarios', 'HorarioController@formHorarios');
Route::post('horarios','HorarioController@store');
Route::get('lista_horarios', 'HorarioController@index');

Route::get('instrumentos', 'InstrumentoController@formInstrumentos');
Route::post('instrumentos','InstrumentoController@store');
Route::get('lista_instrumentos', 'InstrumentoController@index');

Route::get('maestros', 'MaestroController@formMaestro');
Route::post('maestros','MaestroController@store');
Route::get('lista_maestros', 'MaestroController@index');

//Route::get('welcome', function(){

	//return view('welcome');
//});


Route::get('alumno/{id?}', 'AlumnoController@show');
Route::get('maestro/{id?}', 'MaestroController@show');
Route::get('instrumento/{id?}', 'InstrumentoController@show');
Route::get('horario/{id?}', 'HorarioController@show');

Route::get('alumno/{id?}/edit', 'AlumnoController@edit');
Route::get('maestro/{id?}/edit', 'MaestroController@edit');
Route::get('instrumento/{id?}/edit', 'InstrumentoController@edit');
Route::get('horario/{id?}/edit', 'HorarioController@edit');

Route::post('alumno/{id?}/edit', 'AlumnoController@update');
Route::post('maestro/{id?}/edit', 'MaestroController@update');
Route::post('instrumento/{id?}/edit', 'InstrumentoController@update');
Route::post('horario/{id?}/edit', 'HorarioController@update');

Route::post('alumno/{id?}/delete', 'AlumnoController@destroy');
Route::post('maestro/{id?}/delete', 'MaestroController@destroy');
Route::post('instrumento/{id?}/delete', 'InstrumentoController@destroy');
Route::post('horario/{id?}/delete', 'HorarioController@destroy');
Route::get('/', function () {
    return view('welcome');
});
