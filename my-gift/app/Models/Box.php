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
        return $this->belongsTo(Wrapper::class);
    }

    public function comics() {
        return $this->belongsToMany(Comic::class, 'box_comics');
    }

    public function sweets() {
        return $this->belongsToMany(Sweet::class, 'box_sweets');
    }

}
