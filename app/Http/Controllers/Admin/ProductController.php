<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller {
    
    public function index() {
//        Product::with('user', 'product_category')->orderBy('created_at', 'desc')->paginate(5)         //  Жадная загрузка with
//        $products = Product::orderBy('created_at', 'desc')->paginate(5);                            //  Жадная загрузка (Дозагрузка)
//        $products->load('user', 'product_category');                                                //  load()
        return view('admin.products.index', [
            'products' => Product::with('user', 'product_category')->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }

    public function create() {
        return view('admin.products.create', [
            'product_categories' => ProductCategory::all(),
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
            'product_categories' => ProductCategory::all(),
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
