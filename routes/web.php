<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('welcome'); 
});

// HomeController
Route::get('/tags', [HomeController::class, 'tags']);
Route::get('/authors', [HomeController::class, 'authors']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/signin', [HomeController::class, 'signin'])->name('signin')->middleware('alreadyLoggedIn');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup')->middleware('alreadyLoggedIn');
Route::get('/singlepost', [HomeController::class, 'singlepost'])->name('singlepost');

// AdminController

Route::get('/admin', [AdminController::class, 'index'])->name('/admin')->middleware('isLoggedIn');
Route::get('/admin/posts', [BlogPostController::class, 'index'])->name('admin/posts');
Route::get('/admin/create', [AdminController::class, 'Create'])->name('admin/create');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin/categories');

Route::post('/admin/blogpost/create', [BlogPostController::class, 'Create'])->name('admin/blogpost/create');


// Auth/AuthController

Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin/logout');

Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
