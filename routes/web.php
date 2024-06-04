<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('images')->group(function () {
    Route::get('create', [ImageController::class, 'create'])->name('images.create');
    Route::post('', [ImageController::class, 'store'])->name('images.store');
    Route::get('{image}', [ImageController::class, 'show'])->name('images.show');
    Route::get('{image}/edit', [ImageController::class, 'edit'])->name('images.edit');
    Route::post('{image}', [ImageController::class, 'update'])->name('images.update');
});


Route::prefix('login')->group(function () {
    Route::get('', [LoginController::class, 'show'])->name('login.show');
    Route::post('', [LoginController::class, 'authenticate'])->name('login.authenticate')->middleware('throttle:login');
});

Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::prefix('register')->group(function () {
    Route::get('', [RegisterController::class, 'show'])->name('register.show');
    Route::post('', [RegisterController::class, 'register'])->name('register');
});

Route::post('/images/{image}/comments', [CommentController::class, 'store'])->name('comments.store');
