<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function getGenre()
    {
        $all = Genre::all();
        return view('genre', ['genres' => $all]);
    }

    public function getBooks(string $name)
    {
        $r = Genre::where('name', $name)->get();
        $books = $r->books;
        return view('genre_book', compact('books', 'name'));
    }
}
