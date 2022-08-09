<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::resource('/egresados', 'EgresadoController');

Route::resource('/empresas', 'EmpresaController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/egresados/vigentes', 'EgresadoController@verVigentes')->name('vigentes');

Route::get('/egresado/datosAcceso', 'EgresadoController@datosAcceso')->name('datos');

Route::get('/empresa/nuevaActividad', 'EmpresaController@NvaActividad')->name('nuevaAct');








