<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PresidentController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;

// Rutas para jugadores
Route::resource('players', PlayerController::class);

// Rutas para equipos
Route::resource('teams', TeamController::class);

// Rutas para presidentes
Route::resource('presidents', PresidentController::class);

// Rutas para partidos
Route::resource('games', GameController::class);

// Rutas para goles
Route::resource('goals', GoalController::class);
