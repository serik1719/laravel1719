<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    //
    protected $fillable = ['name', 'product_category_id', 'user_id', 'description', 'image', 'novelty', 'quantity'];
    
    
}
