<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

// Página principal (Landing Page) accesible para todos
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

// Grupo de rutas protegidas (solo para usuarios autenticados)
Route::middleware(['auth'])->group(function () {
    
    // Dashboard accesible solo para usuarios autenticados
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Cerrar sesión
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');  // Redirecciona a la landingpage tras cerrar sesión
    })->name('logout');
});

// Rutas de autenticación (Breeze)
require __DIR__.'/auth.php';
