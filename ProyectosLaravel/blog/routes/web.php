<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/posts/nuevoPrueba', [PostController::class, 'nuevoPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::resource('posts', PostController::class);
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
