<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/test', function(){

    return view('test');
});

Route::post('contact', function(){

    return "post route";

});




Route::get('/birinchi', function(){

    return "Birinchi";
});

Route::get('/ikkinchi', function(){

    return "Ikkinchi";
});

Route::redirect('/birinchi', '/ikkinchi');


Route::get('/users/{id?}', function($id = null){

    return "Bu bizning $id userimiz";
})->name('userlar');




