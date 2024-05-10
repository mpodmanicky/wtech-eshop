<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    // Controller for home page 

    public function products(Request $request) {
        $category = $request->input('category');

        $products = Products::where('category', $category)->get();

        return view('products', compact('products'));
    }

    //Loading products based on category

}
