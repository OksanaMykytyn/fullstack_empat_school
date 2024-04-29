<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/auth')->name('auth.')->controller(AuthController::class)->group(function () {

    Route::post('/register', 'register')->name('register');

    Route::post('/login', 'login')->name('login');

    Route::post('/logout', 'logout')->name('logout');
});


Route::prefix('/users')->name('users.')->middleware('auth:api')->group(function () {

    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{id}', [ProductController::class, 'show']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);

});
