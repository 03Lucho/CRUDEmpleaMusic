<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('/menu/menu');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para los roles específicos
Route::middleware(['auth', 'rol:aprendiz'])->group(function () {
    Route::get('/dashboard', [AprendizController::class, 'index'])->name('aprendiz.dashboard');
});

Route::middleware(['auth', 'rol:profesor'])->group(function () {
    Route::get('/profesor/dashboard', 'ProfesorController@index')->name('profesor.dashboard');
});

Route::middleware(['auth', 'rol:administrador'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::resource('aprendices', AprendizController::class);
});

// Ruta para listar todos los aprendices (sin restricción de rol)
Route::get('/aprendices', [AprendizController::class, 'index'])->name('aprendices.index');
Route::get('/aprendices/{aprendiz}', [AprendizController::class, 'show'])->name('aprendices.show'); // Ruta para ver el perfil de un aprendiz
Route::get('/aprendices/{aprendiz}/edit', [AprendizController::class, 'edit'])->name('aprendices.edit'); // Ruta para editar el perfil de un aprendiz
Route::get('/aprendices/create', [AprendizController::class, 'create'])->name('aprendices.create');