<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Models\Player;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'showHome']);
Route::get('/players', [PlayerController::class, 'showPlayers']);

