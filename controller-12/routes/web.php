<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/contact', [BlogController::class, 'contact']);
Route::get('/post/{post:slug}', [BlogController::class, 'showPost']);
Route::get('/author/{user}', [BlogController::class, 'authorPosts']);
Route::get('/category/{category:slug}', [BlogController::class, 'categoryPosts']);
