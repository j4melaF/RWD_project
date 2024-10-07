<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfileController::class, 'showProfiles']);

// Route::get('/profile/{id}', [ProfileController::class, 'getProfiles']);

Route::get('/profile/{profile}', [ProfileController::class, 'getProfiles']);