<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('404', function () {
    return view('404');
});


Route::get('about', function () {
    return view('about');
});


Route::get('blog-details', function () {
    return view('blog-details');
});


Route::get('blog-fullwidth', function () {
    return view('blog-fullwidth');
});


Route::get('blog-sidebar', function () {
    return view('blog-sidebar');
});


Route::get('blog', function () {
    return view('blog');
});


Route::get('404', function () {
    return view('404');
});


Route::get('cart', function () {
    return view('cart');
});


Route::get('checkout', function () {
    return view('checkout');
});


Route::get('contact', function () {
    return view('contact');
});


Route::get('faq', function () {
    return view('faq');
});


Route::get('login', function () {
    return view('login');
});


Route::get('my-account', function () {
    return view('my-account');
});


Route::get('product-details', function () {
    return view('product-details');
});


Route::get('product-grouped', function () {
    return view('product-grouped');
});


Route::get('product-sidebar', function () {
    return view('product-sidebar');
});

Route::get('services', function () {
    return view('services');
});

Route::get('shop-fullwidth-list', function () {
    return view('shop-fullwidth-list');
});

Route::get('shop-fullwidth', function () {
    return view('shop-fullwidth');
});

Route::get('shop-list', function () {
    return view('shop-list');
});

Route::get('shop-right-sidebar-list', function () {
    return view('shop-right-sidebar-list');
});

Route::get('shop-right-sidebar', function () {
    return view('shop-right-sidebar');
});

Route::get('shop', function () {
    return view('shop');
});
Route::get('variable-product', function () {
    return view('variable-product');
});
Route::get('wishlist', function () {
    return view('wishlist');
});
