<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Models\Plateform;
=======
use App\Models\Plateforme;
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0
use App\Models\Game;

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

/**
 * route index
 */
Route::get('/', function(){
<<<<<<< HEAD
    $plateforms = Plateform::all();
    $games = Game::all();
    return view('index', compact('plateforms', 'games'));
=======
    $plateformes = Plateforme::all();
    $games = Game::all();
    return view('index', compact('plateformes', 'games'));
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0
});

/**
 * 404 route
 */
Route::get('404', function () {
    return view('404');
});

/**
 * about page route
 */
Route::get('about', function () {
    $page_name = "About";
    return view('about', [
        'page_name' => $page_name
    ]);
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

Route::get('services', function () {
    return view('services');
});

Route::get('shop', function () {
<<<<<<< HEAD
    $plateforms = Plateform::all();
    $games = Game::all();
    return view('shop', compact('plateforms', 'games'));
   
=======
    $games = Game::all();
    return view('shop', compact('games'));
});

Route::get('shop-plateforme/{id}', function ($id) {
    $plateformes = Plateforme::where('id', '=', $id)->get();
    $games = Game::where('plateforme_id', '=', $id)->get();
    return view('shop-plateforme', compact('plateformes', 'games'));
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0
});

Route::get('wishlist', function () {
    return view('wishlist');
});



//Route::get ({{ $plateform->plateform_type }} , function () {
//   return view({{ $plateform->plateform_type }});
// });


Route::get('XBOX', function () {
    $plateforms = Plateform::all();
    $games = Game::all();
    return view('XBOX',compact('games'));
});

Route::get('PS5', function () {
    $plateforms = Plateform::all();
    $games = Game::all();
    return view('PS5',compact('games'));
});

