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

        $brands = $products->unique('brand')->pluck('brand');

        $colors = $products->unique('color')->pluck('color');

        return view('products', ['products' => $products, 'brands' => $brands, 'colors' => $colors]);
    }

    public function adminIndex() {
        $products = Product::all();
        
        return view('admin_products', ['products' => $products]);
    }

    public function sortByPriceAsc($category) {

        $products = $category ? Product::where('category', $category)->orderBy('price', 'asc')->paginate(12) : collect();

         $brands = $products->unique('brand')->pluck('brand');

        $colors = $products->unique('color')->pluck('color');

        return view('products', ['products' => $products, 'brands' => $brands, 'colors' => $colors]);

    }

    public function sortByPriceDesc($category) {
        $products = $category ? Product::where('category', $category)->orderBy('price', 'desc')->paginate(12) : collect();

         $brands = $products->unique('brand')->pluck('brand');

        $colors = $products->unique('color')->pluck('color');

        return view('products', ['products' => $products, 'brands' => $brands, 'colors' => $colors]);
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

        return redirect()->route('admin.products')->with('success', 'Product created successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin_dashboard_modify', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->color = $request->input('color');
        $product->brand = $request->input('brand');
        $product->available_stock = $request->input('available_stock');

        $product->save();

        return redirect()->route('admin.products');
    }

}
