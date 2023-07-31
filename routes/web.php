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

Route::middleware(['auth', 'rol:aprendiz'])->group(function () {
    Route::get('/dashboard', [AprendizController::class, 'index'])->name('aprendiz.dashboard');
});

Route::middleware(['auth', 'rol:profesor'])->group(function () {
    Route::get('/profesor/dashboard', 'ProfesorController@index')->name('profesor.dashboard');
});

Route::middleware(['auth', 'rol:administrador'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
});

Route::middleware(['auth', 'rol:administrador'])->resource('aprendices', AprendizController::class);
