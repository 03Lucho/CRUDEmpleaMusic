<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfesorController;


Route::get('/', function () {
    return view('home');
})->middleware('/home/home');



Route::get('/', [AuthController::class, 'showLoginForm'])->name('home');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para los roles específicos
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

// Ruta para listar todos los aprendices (sin restricción de rol)
Route::get('/aprendices', [AprendizController::class, 'index'])->name('aprendices.index');
Route::get('/aprendices/create', [AprendizController::class, 'create'])->name('aprendices.create');
Route::post('/aprendices', [AprendizController::class, 'store'])->name('aprendices.store');
Route::get('/aprendices/{aprendiz}', [AprendizController::class, 'show'])->name('aprendices.show'); 
Route::get('/aprendices/{aprendiz}/edit', [AprendizController::class, 'edit'])->name('aprendices.edit');
Route::put('/aprendices/{aprendiz}', [AprendizController::class, 'update'])->name('aprendices.update');
Route::delete('/aprendices/{aprendiz}', [AprendizController::class, 'destroy'])->name('aprendices.destroy'); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
