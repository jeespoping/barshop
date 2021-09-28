<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $products = Product::all();

        return view('pages.home', compact('products'));
    }
    public function admin(){
        $products = Product::all();



        return view('pages.admin', compact('products'));
    }
}
