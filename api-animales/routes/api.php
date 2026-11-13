<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnimalController;

// rutas para manejar los animales
Route::apiResource('animales', AnimalController::class);