<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Description;

class ProductController extends Controller
{
    public function index(Request $request) {

        $category = $request->input('category');
        
        $products = $category ? Product::where('category', $category)->paginate(12) : collect();

        return view('products', ['products' => $products]);
    }

    public function store(Request $request) {
        
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'color' => 'required|max:255',
            'brand' => 'required|max:255',
            'available_stock' => 'required|integer',
        ]);
        
        $product = Product::factory()->create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'color' => $request->color,
            'brand' => $request->brand,
            'available_stock' => $request->available_stock,
        ]);

        return response()->json(['message' => 'Product has been added'], 201);
    }


}
