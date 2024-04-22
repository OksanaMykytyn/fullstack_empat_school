<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function getBooks() {
        $all = Book::all();
        return view('index', ['books' => $all]);
    }

}
