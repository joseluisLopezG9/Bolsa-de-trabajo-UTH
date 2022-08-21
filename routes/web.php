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

Auth::routes();


Route::resource('/egresados', 'EgresadoController')->names('admin.egresados');

Route::resource('/empresas', 'EmpresaController')->names('admin.empresas');

Route::resource('/vacantes', 'VacanteController')->names('admin.vacantes');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/egresados/vigentes', 'EgresadoController@verVigentes')->name('admin.egresadosVigentes');

Route::get('/egresado/datosAcceso', 'EgresadoController@datosAcceso')->name('admin.datosAcceso');

Route::get('/empresa/nuevaActividad', 'EmpresaController@NvaActividad')->name('admin.nvaActividad');








