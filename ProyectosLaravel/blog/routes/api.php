<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('posts', PostController::class);
});
