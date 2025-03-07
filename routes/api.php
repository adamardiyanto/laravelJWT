<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

Route::post('register', [App\Http\Controllers\UserController::class, 'register']);
Route::post('login', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('open', [App\Http\Controllers\DataController::class, 'open']);

Route::group(['middleware' => JwtMiddleware::class], function() {
    Route::get('user', [App\Http\Controllers\UserController::class, 'getAuthenticatedUser']);
    Route::post('logout', [App\Http\Controllers\UserController::class, 'logout']);
    Route::get('closed', [App\Http\Controllers\DataController::class, 'closed']);
});



