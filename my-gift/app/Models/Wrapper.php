<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wrapper extends Model
{
    use HasFactory;

    public function boxes() {
        return $this->hasMany('wrappers');
    }
}
