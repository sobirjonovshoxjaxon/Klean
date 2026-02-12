<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//PageController routes 
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/about',[PageController::class, 'about'])->name('about.page');
Route::get('/blog',[PageController::class, 'blog'])->name('blog.page');
Route::get('/blog/detail',[PageController::class, 'blogDetail'])->name('blogdetail.page');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');
Route::get('/service',[PageController::class, 'service'])->name('service.page');
Route::get('/project',[PageController::class, 'project'])->name('project.page');

//AdminController 
Route::get('/admin/index',[AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/login',[AdminController::class, 'loginPage'])->name('login.page');
Route::get('/logout',[AdminController::class, 'logout'])->name('logout.page');

//PostController 
Route::resource('/posts', PostController::class);










