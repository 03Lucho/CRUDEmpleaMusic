<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('plantillainicio/inicio');
})->name('plantillainicio');

//profesores
Route::middleware(['auth', 'checkRole:profesor'])->group(function () {
    //index
    Route::get('Profesores/index/{codigo}','App\Http\Controllers\ProfesorController@index')->name('profesores.index');
    //perfil
    Route::get('Profesores/crearperfil/{idusuario}','App\Http\Controllers\ProfesorController@perfilcreate')->name('profesores.createperfil');
    Route::post('Profesores/agregarperfil','App\Http\Controllers\ProfesorController@perfilstore')->name('profesores.storeperfil');
    Route::get('Profesores/perfil/{codigoprofe}','App\Http\Controllers\ProfesorController@perfill')->name('profesores.perfill');
    Route::get('Profesores/editperfil/{id}','App\Http\Controllers\ProfesorController@perfiledit')->name('profesores.editarperfil');
    Route::post('Profesores/actualizar/{id}','App\Http\Controllers\ProfesorController@perfilupdate')->name('profesores.perfilupdate');
    //crear y almacenar clase
    Route::get('Profesores/crear/{idprofesor}','App\Http\Controllers\ProfesorController@create')->name('profesores.create');
    Route::post('Profesores/agregar','App\Http\Controllers\ProfesorController@store')->name('profesores.store');
    //editar y actualizar clase
    Route::get('Profesores/editclase/{id}/{codigo}','App\Http\Controllers\ProfesorController@editclass')->name('profesores.editarclases');
    Route::get('Profesores/actualizarclase/{id}/{codigo}','App\Http\Controllers\ProfesorController@updateclass')->name('profesores.updateclass');
    //aceptar Agenda
    Route::post('Profesores/aceptar/{id1}/{id2}/{id3}/{id4}/{id5}/{id6}', 'App\Http\Controllers\ProfesorController@agendconfirmstore')->name('profesores.confirmstore');
    //mostrar agendas
    Route::get('Profesores/mostraragendas/{id}','App\Http\Controllers\ProfesorController@showagends')->name('profesores.showagen');
    //mostrar perfiles
    Route::get('Profesores/verperfilagendado/{id}','App\Http\Controllers\ProfesorController@showperfapren')->name('profesores.perfaprendagend');
});

//Crear comentario
Route::get('Profesores/crearcomentario','App\Http\Controllers\ProfesorController@comentcreate')->name('profesores.createcomentario');
Route::post('Profesores/agregarcomentario','App\Http\Controllers\ProfesorController@comentstore')->name('profesores.comentarstore');




//administradores
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    //index
    Route::get('Administradores/index','App\Http\Controllers\AdminController@indexcoment')->name('admins.index');
    //crear y almacenar categorias
    Route::get('categorias/crear','App\Http\Controllers\AdminController@catecreate')->name('cat.create');
    Route::post('categorias/agregar','App\Http\Controllers\AdminController@catestore')->name('cat.store');
    //mostrar categorias
    Route::get('Administradores/show','App\Http\Controllers\AdminController@showcates')->name('admins.showcats');
});

//aprendiz
Route::middleware(['auth', 'checkRole:aprendiz'])->group(function () {
    

});

//inicio sesion con auth
Auth::routes();
