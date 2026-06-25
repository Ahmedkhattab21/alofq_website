<?php

use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [WelcomeController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
