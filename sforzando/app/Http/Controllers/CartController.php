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

        $cart = session()->get('cart', []); // Assuming cart is stored in session

    // 2. Check if product exists in the cart
    if (!array_key_exists($productId, $cart)) {
        return redirect()->back()->with('error', 'Product not found in cart');
    }

    // 3. Remove the product from the cart
    unset($cart[$productId]);

    // 4. Update the cart data (replace with your storage mechanism)
    session()->put('cart', $cart);

    // 5. Redirect back with a success message
    return redirect()->back();

    }

    public function addQuantity(Request $request, $productId) {

        $product = Product::find($productId); // Fetch product details

        $cart = session()->get('cart', []); // Retrieve cart data from session

        $cart[$productId]['quantity']++;

        session()->put('cart', $cart); // Store updated cart data in session

        return redirect()->back();

    }

    public function subQuantity(Request $request, $productId) {
        $product = Product::find($productId); // Fetch product details

        $cart = session()->get('cart', []); // Retrieve cart data from session

        if($cart[$productId]['quantity'] == 1) {
            unset($cart[$productId]);
        } else {
            $cart[$productId]['quantity']--;
        }

        session()->put('cart', $cart); // Store updated cart data in session

        return redirect()->back();

    }
}
