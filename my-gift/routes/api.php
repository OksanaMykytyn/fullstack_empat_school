<?php

use App\Http\Controllers\Api\BoxController;
use App\Http\Controllers\Api\ComicController;
use App\Http\Controllers\Api\SweetController;
use App\Http\Controllers\Api\WrapperController;
use App\Http\Resources\BoxResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/users')->group(function () {
    Route::get('/wrappers', [WrapperController::class, 'index']);
    Route::get('/wrappers/{id}', [WrapperController::class, 'show']);

    Route::get('/comics', [ComicController::class, 'index']);
    Route::get('/comics/{id}', [ComicController::class, 'show']);

    Route::get('/boxes', [BoxController::class, 'index']);
    Route::get('/boxes/{id}', [BoxController::class, 'show']);
    Route::post('/boxes', [BoxController::class, 'store']);

    Route::get('/sweets', [SweetController::class, 'index']);
    Route::get('/sweets/{id}', [SweetController::class, 'show']);

    Route::get('/add_to_cart_comic/{id}', [ComicController::class, 'addToCart']);
    Route::get('/add_to_cart_sweet/{id}', [SweetController::class, 'addToCart']);
    Route::get('/add_to_cart_wrapper/{id}', [WrapperController::class, 'addToCart']);

    Route::get('/remove_from_cart_comic/{id}', [ComicController::class, 'removeFromCart']);
    Route::get('/remove_from_cart_sweet/{id}', [SweetController::class, 'removeFromCart']);
    Route::get('/remove_from_cart_wrapper/{id}', [WrapperController::class, 'removeFromCart']);
});
