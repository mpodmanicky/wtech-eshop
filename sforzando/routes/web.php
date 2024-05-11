<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Models\Product;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function() {
    return view('index');
});

Route::get('/products/{id}', function ($id) {
    $product = Product::find($id); // Retrieve product using ID

    return view('product_detail', ['product' => $product]);
});

Route::get('/cart/{id}', function($id){
    $product = Product::find($id); // Retrieve product using ID

    return view('cart', ['product' => $product]);

});

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('/admin/dashboard', [HomeController::class, 'index'])->
    middleware(['auth', 'admin'])->name('admin.dashboard');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/admin/products', [ProductController::class, 'adminIndex'])->name('admin.products');

