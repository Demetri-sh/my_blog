<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/test', function () {
    return view('Hello World');
});

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/user/{id}', function ($id) {
    return "User ID: $id";
});

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Hello, $name!";
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{id}', [PostController::class, 'show']);
