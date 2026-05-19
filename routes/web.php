<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//PageController routes 
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/about',[PageController::class, 'about'])->name('about.page');
Route::get('/blog',[PageController::class, 'blog'])->name('blog.page');
Route::get('/blog/detail/{post}',[PageController::class, 'blogDetail'])->name('blogdetail.page');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');
Route::get('/service',[PageController::class, 'service'])->name('service.page');
Route::get('/project',[PageController::class, 'project'])->name('project.page');

//AdminController 
Route::post('/index/adminpanel',[AdminController::class, 'authenticate'])->name('is_user');
Route::get('/admin/index',[AdminController::class, 'adminIndex'])->name('admin.index');
Route::get('/admin/register',[AdminController::class, 'adminRegister'])->name('register.page');
Route::post('/admin/register',[AdminController::class, 'register_store'])->name('register.store');
Route::get('/admin/login',[AdminController::class, 'loginPage'])->name('login.page');
Route::get('/logout',[AdminController::class, 'logout'])->name('logout.page');

//UserController 
Route::resource('users', UserController::class);

//PostController 
Route::resource('/posts', PostController::class);

//CommentController
Route::resource('/comments', CommentController::class);

// CategoryController 
Route::resource('/categories', CategoryController::class)->middleware('auth');

//TagController 
Route::resource('/tags', TagController::class);










