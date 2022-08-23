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


Route::resource('/egresados', 'EgresadoController')->names('admin.egresados')->middleware('auth');

Route::resource('/empresas', 'EmpresaController')->names('admin.empresas')->middleware('auth');

Route::resource('/vacantes', 'VacanteController')->names('admin.vacantes')->middleware('auth');

Route::resource('/niveles', 'NiveleController')->names('admin.niveles')->middleware('auth');

Route::resource('/carreras', 'CarreraController')->names('admin.carreras')->middleware('auth');

Route::resource('/generaciones', 'GeneracioneController')->names('admin.generaciones')->middleware('auth');

Route::resource('/estados', 'EstadoController')->middleware('auth');

Route::resource('/areas', 'AreaController')->names('admin.areas')->middleware('auth');

Route::resource('/giros', 'GiroController')->names('admin.giros')->middleware('auth');

Route::resource('/actividades', 'ActividadeController')->names('admin.actividades')->middleware('auth');

Route::resource('/areas-vacantes', 'AreasVacanteController')->names('admin.areas-vacantes')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'WelcomeController@index')->name('welcome');

Route::get('/egresados/vigentes', 'EgresadoController@verVigentes')->name('admin.egresadosVigentes');

Route::get('/egresado/datosAcceso', 'EgresadoController@datosAcceso')->name('admin.datosAcceso');
