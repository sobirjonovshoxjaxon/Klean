<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/users/store',[UserController::class, 'store'])->name('user.store');
// Route::get('/users/{user}',[UserController::class, 'show']);
// Route::get('/users/{user_id}/edit',[UserController::class, 'edit']);











