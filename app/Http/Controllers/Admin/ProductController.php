<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller {
    
    public function index() {
//        $products = Product::orderBy('created_at', 'desc')->paginate(5);
//        dump($products);
        return view('admin.products.index', [
            'products' => Product::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function create() {
        return view('admin.products.create', [
            
        ]);
    }

    public function store(Request $request) {
       Product::create($request->all());
       return redirect()->route('admin.product.index');
    }
    
    public function show(Product $product) {
        //
    }

    public function edit(Product $product) {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product) {
        $product->update($request->all());
//        $product->update($request->except('slug')));      //  запретит зменение поля slug
        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product) {
//        $article->categories()->detach();
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
