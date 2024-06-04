<?php

use App\Http\Controllers\Api\V1\ImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('images/{image:id}', [ImageController::class, 'show']);
    Route::get('images', [ImageController::class, 'index']);
});