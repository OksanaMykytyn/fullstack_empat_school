<?php

namespace App\Http\Controllers;

use App\Models\AgeCategory;

class AgeCategoryController extends Controller
{
    public function getBooks(string $name) {
        $r = AgeCategory::where('name', $name)->first();;
        $books = $r->books;
        return view('category', compact('books', 'name'));
    }
}
