<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PropiedadesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('agentes', AgentesController::class);
Route::resource('categorias', CategoriasController::class);
Route::resource('propiedades', PropiedadesController::class);