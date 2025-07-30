<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TechnicController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [LogController::class, 'login']);

Route::post('/logout', [LogController::class, 'logout'])
    ->middleware('auth:sanctum');

// Route::get('/users', [UserController::class, 'checkUser'])
//     ->middleware('auth:sanctum');

Route::get('/technic', [TechnicController::class, 'getTechnics']);

Route::get('/post', [PostsController::class, 'getPosts']);

Route::get('/user', [UserController::class, 'getUsers'])
    ->middleware('auth:sanctum');

Route::post('/post', [PostsController::class, 'store']);