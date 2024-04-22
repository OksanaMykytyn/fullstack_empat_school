<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAuthor() {
        $all = Author::all();
        return view('authors', ['authors' => $all]);
    }
}
