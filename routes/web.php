<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MailController;
// use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get("send-mail",[MailController::class,"index"]);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students-optimized', [StudentController::class, 'optimized']);



// use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
