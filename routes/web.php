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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('front-end.landing');
});
Route::get('/books', function () {
    return view('front-end.productsView');
})->name('books');
Route::get('/books-single/{product_name}/{cat}', 'ProductController@index')->name('book');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/download',function(){
    return view('front-end.landing');
})->middleware('auth')->name('download');
