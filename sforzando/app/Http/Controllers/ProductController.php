<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Products controller for routing and displaying products
    public function index(Request $request) {

        $category = $request->input('category');

        $products = Product::where('category', $category)->get();

        // pagination, ak chcem vsetky produkty, tak paginate(all)
        $products = Product::paginate(12);
        return view('products');
    }

    
}
