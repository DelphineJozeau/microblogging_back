<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LogController::class, 'login']);

Route::post('/logout', [LogController::class, 'logout'])
    ->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'checkUser'])
    ->middleware('auth:sanctum');
