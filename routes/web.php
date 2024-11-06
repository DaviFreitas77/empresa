<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::post('/enviar-formulario', [ContatoController::class, 'enviarFormulario'])->name('enviar.formulario');
