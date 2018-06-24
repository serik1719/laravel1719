<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    
    protected $fillable = ['name', 'product_category_id', 'user_id', 'description', 'image', 'novelty', 'quantity'];
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    public function product_category() {
        return $this->belongsTo('App\Models\ProductCategory');
    }
}
