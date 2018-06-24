<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller {
    public function index() {
        return view('admin.product_categories.index', [
            'product_categories' => ProductCategory::withCount('products')->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }

    public function create() {
        return view('admin.product_categories.create');
    }

    public function store(Request $request) {
        ProductCategory::create(request()->all());
        return redirect()->route('admin.product_category.index');
    }

    public function show($id) {
        //
    }

    public function edit(ProductCategory $product_category) {
        return view('admin.product_categories.edit', [
            'product_category' => $product_category,
        ]);
    }

    public function update(Request $request, ProductCategory $product_category) {
        $product_category->update(request()->all());
        return redirect()->route('admin.product_category.index');
    }

    public function destroy(ProductCategory $product_category) {
        $product_category->delete();
        return redirect()->route('admin.product_category.index');
    }
}
