<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
    // Relationship with the Review Model
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
