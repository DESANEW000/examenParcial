<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\vehiculoController;

Route::get('/', function () {
    return ('welcome');
});

route::get('mantenimiento',[EntradaController::class,'index']);
