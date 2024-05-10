<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/products', 'ProductController@products')->name('products');

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
    middleware(['auth', 'admin']);
