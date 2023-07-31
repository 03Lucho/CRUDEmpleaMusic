<?php

use Illuminate\Support\Facades\Route;


use App\Models\Aprendiz;

use App\Http\Controllers\AprendizController;

use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('/menu/menu');
});

Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/aprendices', [AprendizController::class, 'index'])->name('aprendices.index');

// Ruta para el dashboard del aprendiz
Route::middleware(['auth', 'rol:aprendiz'])->group(function () {
    Route::get('/dashboard', 'AprendizController@index')->name('aprendiz.dashboard');
});

// Ruta para el dashboard del profesor
Route::middleware(['auth', 'rol:profesor'])->group(function () {
    Route::get('/profesor/dashboard', 'ProfesorController@index')->name('profesor.dashboard');
});

// Ruta para el dashboard del administrador
Route::middleware(['auth', 'rol:administrador'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
});

Route::middleware(['auth', 'rol:administrador'])->group(function () {
    Route::resource('aprendices', 'AprendizController');
});