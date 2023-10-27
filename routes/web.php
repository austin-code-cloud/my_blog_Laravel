<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\auth\AuthController;



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

// PanelController

Route::get('/admin', [PanelController::class, 'panel'])->name('/admin')->middleware('isLoggedIn');
Route::get('/admin/posts', [PanelController::class, 'blogPost'])->name('admin/posts');
Route::get('/admin/newpost', [PanelController::class, 'newPost'])->name('admin/newpost');
Route::get('/admin/categories', [PanelController::class, 'categories'])->name('admin/categories');

//  BlogPostController

Route::post('/admin/addnewpost', [BlogPostController::class, 'addnewpost'])->name('admin/addnewpost');

// Auth/AuthController

Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin/logout');

Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
