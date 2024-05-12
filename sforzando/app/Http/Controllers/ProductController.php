<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(Request $request) {

        $category = $request->input('category');
        
        $products = $category ? Product::where('category', $category)->paginate(12) : collect();

        return view('products', ['products' => $products]);
    }

    public function adminIndex() {
        $products = Product::all();
        
        return view('admin_products', ['products' => $products]);
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
            'images' => 'sometimes|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
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

        if($request->hasFile('images')) {
            $images = $request->file('images');
            foreach($images as $image) {
                $filename = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/product-images'), $filename);
    
                $imageModel = new Image();
                $imageModel->url = $filename;
                $imageModel->product_id = $product->id;
                $imageModel->save();
            }
        }

        return redirect()->route('admin.products')->with('success', 'Product created successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        // Delete images from the folder and the database
        foreach ($product->images as $image) {
            // Delete image from the folder
            $imagePath = public_path('images/product-images/' . $image->url);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            // Delete image from the database
            $image->delete();
        }

        $product->delete();

        // Delete images

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

        // Update images

        $product->save();

        return redirect()->route('admin.products');
    }

}
