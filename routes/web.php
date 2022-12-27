<?php

use App\Http\Controllers\HomeController;
use App\Screens\HomeScreen;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/salt',  HomeScreen::class);