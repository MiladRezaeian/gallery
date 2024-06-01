<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/images/create', [ImageController::class, 'create'])->name('images.create');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');
Route::get('/images/{image}', [ImageController::class, 'show'])->name('images.show');
Route::get('/images/{image}/edit', [ImageController::class, 'edit'])->name('images.edit');
Route::post('/images/{image}/', [ImageController::class, 'update'])->name('images.update');

