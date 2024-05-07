<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description',
        'price',
        'photo_path',
    ];

    public function wrapper() {
        return $this->belongsTo('boxes');
    }
}
