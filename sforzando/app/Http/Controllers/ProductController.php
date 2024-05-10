<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Products controller for routing and displaying products
    public function index(Request $request) {

        $category = $request->input('category');
        
        $products = $category ? Product::where('category', $category)->paginate(12) : collect();

        return view('products', ['products' => $products]);
    }

    public function store(Request $request) {
        // placeholder
    }


}
