<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    // Products controller for routing and displaying products
    public function products(Request $request) {
        $category = $request->input('category');

        $products = Products::where('category', $category)->get();

        return view('products');
    }

    public function index() {
        return view('products');
    }
}
