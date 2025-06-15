<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', [FilmController::class, 'index']);