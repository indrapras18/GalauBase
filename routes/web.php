<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaylistController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist');
