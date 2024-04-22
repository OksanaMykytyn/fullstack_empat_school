<?php

use App\Http\Controllers\AgeCategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Models\Author;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'getBooks']);

Route::get('/book', [BookController::class, 'getBooks']);

Route::get('/author', [AuthorController::class, 'getAuthor']);

Route::get('/genre', [GenreController::class, 'getGenre']);

Route::get('/book/category/{name}', [AgeCategoryController::class, 'getBooks']);

Route::get('/genre/{name}', [GenreController::class, 'getBooks']);


