<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/posts', PostController::class);

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);

Route::post('/destroy', [PostController::class, 'destroy']);

Route::get('/show/{id}', [PostController::class, 'show']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/update/{id}', [PostController::class, 'update']);