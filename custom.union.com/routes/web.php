<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('index', ['products'=> [new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 344
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 2940
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 3402
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 2843
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 1000
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 749
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 46583
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 6493
    ),
    new Product(
        imagePath: 'resources\img\sneakers1.jpg',
        name: 'Назва',
        productionTime: 3,
        price: 32894
    ),]]);
});

Route::get('/result', [MyController::class, 'getFilter']);

Route::get('/order', [MyController::class, 'order']);

Route::post('/order/send', [MyController::class, 'sendOrder']);