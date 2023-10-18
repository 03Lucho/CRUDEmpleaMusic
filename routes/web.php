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
    Route::resource('aprendices', 'App\Http\Controllers\AprendizController');
    Route::get('/aprendices/index','App\Http\Controllers\AprendizController@index')->name('aprendices.index');
    Route::post('/aprendices','App\Http\Controllers\AprendizController@store')->name('aprendices.store');
    Route::get('/aprendices/{idaprendiz}/edit', 'App\Http\Controllers\AprendizController@edit')->name('aprendices.edit');
    Route::put('/aprendices/{codigoA}','App\Http\Controllers\AprendizController@update')->name('aprendices.update');
    Route::get('/aprendices/show/{aprendiz}','App\Http\Controllers\AprendizController@show')->name('aprendices.show');
    Route::get('/agendar/clase/{idclase}','App\Http\Controllers\AprendizController@AgendarClase')->name('agendar.clase');
    Route::post('/aprendices/agendar/store/{idclase}','App\Http\Controllers\AprendizController@storeAgenda')->name('agendar.store');
    Route::get('/aprendices/create','App\Http\Controllers\AprendizController@create')->name('aprendices.create');
    Route::get('aprendices/perfil/{codigoA}', 'App\Http\Controllers\AprendizController@profileA')->name('aprendices.profileA');
     //aceptar Agenda
     Route::post('Profesores/aceptar/{idclase}', 'App\Http\Controllers\ProfesorController@agendconfirmstore')->name('profesores.confirmstore');
    
});

//inicio sesion con auth
Auth::routes();
