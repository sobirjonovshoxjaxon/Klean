<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}',[UserController::class, 'show']);
Route::get('/users/{user_id}/edit',[UserController::class, 'edit']);

Route::resource('photos', PhotoController::class);









