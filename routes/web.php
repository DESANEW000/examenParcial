<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\vehiculoController;

Route::get('/', function () {
    return ('welcome');
});

route::get('entradas',[EntradaController::class,'index']);
route::get('vehiculos',[vehiculoController::class,'index']);
