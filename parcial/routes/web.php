<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio (index.blade.php)
Route::get('/', function () {
    return view('index');
})->name('home');

// Ruta para el historial (historial.blade.php)
Route::get('/historial', function () {
    return view('historial');
})->name('historial');

// Ruta para los mapas (mapas.blade.php)
Route::get('/mapas', function () {
    return view('mapas');
})->name('mapas');

// Ruta para el inicio de sesión (login.blade.php)
Route::get('/login', function () {
    return view('login');
})->name('login');

// Ruta para el aviso de privacidad (avisodeprivacidad.blade.php)
Route::get('/avisodeprivacidad', function () {
    return view('avisodeprivacidad');
})->name('privacidad');
