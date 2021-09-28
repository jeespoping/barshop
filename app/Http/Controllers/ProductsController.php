<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductSaveRequest;
use App\Models\Product;

class ProductsController extends Controller
{
    public function store(ProductSaveRequest $request) {
        Product::create($request->validated());
        return redirect()->route('admin');
    }

    public function edit(Product $product){
        return view('pages.edit', [
            'product' => $product
        ]);
    }

    public function update(Product $product, ProductSaveRequest $request) {
        $product->update($request->validated());
        return redirect()->route('products.edit', $product);
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('admin');
    }
}
