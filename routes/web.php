<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','HomeController@landing')->name('landing');

Route::get('/books', function () {
    return view('front-end.productsView');
})->name('books');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});


Route::middleware(['verified','admin'])->group( function () {
    Route::get('/admin-dashboard','HomeController@dashboard')->name('admin.dashboard');
    Route::get('/create-book','HomeController@add_book')->name('admin.addbook');
    Route::post('/store-book','HomeController@store_book')->name('admin.storebook');
    Route::post('/update-book','HomeController@update_book')->name('admin.updatebook');
    Route::get('/create-music','HomeController@add_music')->name('admin.addmusic');
    Route::post('/store-music','HomeController@store_music')->name('admin.storemusic');
    Route::post('/update-music','HomeController@update_music')->name('admin.updatemusic');
    Route::get('/books/{book}', 'BookController@show')->name('book');
    Route::get('/musics/{music}', 'MusicController@show')->name('music');


    Route::get('/admin-books','HomeController@books')->name('admin.books');
    Route::get('/books/{book}/edit','HomeController@book_edit')->name('admin.books.edit');
    Route::post('/book-delete','HomeController@book_delete')->name('book.delete');
    Route::get('/musics','HomeController@musics')->name('admin.musics');
    Route::post('/music-delete','HomeController@music_delete')->name('music.delete');
    Route::get('/musics/{music}/edit','HomeController@music_edit')->name('admin.musics.edit');
    Route::get('/books/{book}/download','BookController@download')->name('download');
});
