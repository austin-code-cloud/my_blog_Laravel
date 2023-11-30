<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SinglePostController;


// Home

Route::get('/', [HomeController::class, 'index']);
Route::get('/tags', [TagController::class, 'index'])->name('tags');
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/signin', [AuthController::class, 'login'])->name('signin')->middleware('alreadyLoggedIn');
Route::get('/signup', [AuthController::class, 'register'])->name('signup')->middleware('alreadyLoggedIn');
Route::get('/singlepost/{slug}', [BlogPostController::class, 'singlepost'])->name('singlepost');
Route::get('/tag/{tag}', [TagController::class, 'showTag'])->name('tag');



Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

// AdminController

Route::get('/admin', [AdminController::class, 'index'])->name('/admin')->middleware('isLoggedIn');
Route::get('/admin/posts', [AdminController::class, 'Post'])->name('admin/posts');
Route::get('/admin/createpost', [AdminController::class, 'CreatePost'])->name('admin/createpost');
Route::get('/admin/createcategory', [AdminController::class, 'CreateCategory'])->name('admin/createcategory');
Route::get('/admin/createtag', [AdminController::class, 'CreateTag'])->name('admin/createtag');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin/logout');

Route::post('/admin/blogpost/createpost', [BlogPostController::class, 'CreatePost'])->name('admin/blogpost/createpost');
Route::post('/admin/category/createcategory', [CategoryController::class, 'CreateCategory'])->name('admin/category/createcategory');
Route::post('/admin/tag/createtag', [TagController::class, 'createTag'])->name('admin/tag/createtag');
