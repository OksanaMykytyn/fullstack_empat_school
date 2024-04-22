<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function genres() {
        return $this->belongsToMany(Genre::class, 'book_genres');
    }

    public function authors() {
        return $this->belongsToMany(Author::class, 'author_books');
    }

    public function age_category() {
        return $this->belongsTo(AgeCategory::class);
    }

    
}
