<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweet extends Model
{
    use HasFactory;

    public function boxes() {
        return $this->belongsToMany(Box::class);
    }
}
