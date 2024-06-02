<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/images/create', [ImageController::class, 'create'])->name('images.create');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{image}', [ImageController::class, 'show'])->name('images.show');
Route::get('/images/{image}/edit', [ImageController::class, 'edit'])->name('images.edit');
Route::post('/images/{image}/', [ImageController::class, 'update'])->name('images.update');


Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');
