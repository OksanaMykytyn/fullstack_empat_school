<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Request;

class MyController extends Controller {
    public function getFilter (Request $request) {
        $from = $_GET['from'] ?? 0;
        $to = $_GET['to'] ?? 100000;

        $products = [
            new Product(
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
            ),
        ];
        
        $list = array();
        foreach($products as $product) {
            if ($product->getPrice() >= $from && $product->getPrice() <= $to) {
                array_push($list, $product);
            }
        }

        return view('index', ['products'=> $list]);
    }

    public function order() {
        return view('result');
    }

    public function sendOrder(Request $request) {
        $email = $_POST['email'];
        $text = $_POST['message'];
        return view('send');
    }
}