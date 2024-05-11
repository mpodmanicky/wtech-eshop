<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
{
    $product = Product::find($productId); // Fetch product details

    if (!$product) {
        return redirect()->back()->withErrors(['error' => 'Product not found']);
    }

    $cart = session()->has('cart') ? session('cart') : []; // Get existing cart if available

    $existingProduct = array_key_exists($productId, $cart); // Check if product already in cart

    if ($existingProduct) {
        $cart[$productId]['quantity']++; // Increase quantity for existing product
    } else {
        $cart[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart); // Store updated cart data in session

    return redirect()->back()->with('success', 'Product added to cart!');
}

    public function viewCart(Request $request) {
        $cart = session()->get('cart', []); // Retrieve cart data from session

        return view('cart', ['cart' => $cart]);
    }

    public function buyNow(Request $request, $productId) {
        $product = Product::find($productId); // Fetch product details

        if (!$product) {
            return redirect()->back()->withErrors(['error' => 'Product not found']);
        }

        $cart = session()->has('cart') ? session('cart') : []; // Get existing cart if available

        $existingProduct = array_key_exists($productId, $cart); // Check if product already in cart

        if ($existingProduct) {
            $cart[$productId]['quantity']++; // Increase quantity for existing product
        } else {
            $cart[$productId] = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        $cart = session()->get('cart', []); // Retrieve cart data from session

        return view('cart', ['cart' => $cart]);

    }

    public function removeFromCart(Request $request, $productId) {

    }

    public function addQuantity(Request $request, $productId) {

    }

    public function subQuantity(Request $request, $productId) {

    }
}
