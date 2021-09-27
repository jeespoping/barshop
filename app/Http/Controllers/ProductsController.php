<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
           'name' => 'required|min:3|unique:products',
           'price' => 'required|number',
           'description' => 'required'
        ]);

        Product::create($request-all());

        return redirect()->route('admin');
    }
}
