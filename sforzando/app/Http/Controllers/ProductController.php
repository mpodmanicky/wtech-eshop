<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Description;

class ProductController extends Controller
{
    // Products controller for routing and displaying products
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
        
        $product = Product::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'color' => $request->color,
            'brand' => $request->brand,
            'available_stock' => $request->available_stock,
        ]);

        Log::info('Product created: ', ['product' => $product->toArray()]);
        
        $description = $product->description()->create([
            'description' => $request->description,
        ]);

        Log::info('Description created: ', ['description' => $description->toArray()]);
        
        return response()->json(['success' => 'Product created successfully.', 'product' => $product], 201);
    }


}
