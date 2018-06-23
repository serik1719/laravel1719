<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function category($slug) {
        $category = Category::where('slug', $slug)->first();
        
        return view('blog.category', [
            'category' => $category,
            'article' => $category->articles()->where('published', 1)->paginate(12),
        ]);
    }
}
