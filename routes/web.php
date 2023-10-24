<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;

// GET REQUEST - HomeController
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tags', [HomeController::class, 'tags']);
Route::get('/authors', [HomeController::class, 'authors']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/signin', [HomeController::class, 'signin']);

// GET REQUEST - PanelController
Route::get('/admin', [PanelController::class, 'panel'])->name('/admin');
Route::get('/admin/posts', [PanelController::class, 'blogPost'])->name('admin/posts');
Route::get('/admin/newpost', [PanelController::class, 'newPost'])->name('admin/newpost');
Route::get('/admin/comments', [PanelController::class, 'comment'])->name('admin/comments');
Route::get('/admin/categories', [PanelController::class, 'categories'])->name('admin/categories');
Route::get('/admin/authors', [PanelController::class, 'authors'])->name('admin/authors');
Route::get('/admin/profile', [PanelController::class, 'profile'])->name('admin/profile');
Route::get('/admin/inbox', [PanelController::class, 'email'])->name('admin/inbox');
Route::get('/admin/readEmail', [PanelController::class, 'readEmail'])->name('admin/readEmail');
Route::get('/admin/calender', [PanelController::class, 'calender'])->name('admin/calender');
Route::get('/admin/chat', [PanelController::class, 'chat'])->name('admin/chat');
