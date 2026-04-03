<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/', fn() => view('index'))->name('home');
Route::get('/shop', fn() => view('shop'))->name('shop');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/blog', fn() => view('blog'))->name('blog');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/cart', fn() => view('cart'))->name('cart');

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/register', fn() => view('auth.register'))->name('register');

Route::get('/navbar', fn() => view('partials.navbar'))->name('navbar');
Route::get('/footer', fn() => view('partials.footer'))->name('footer');