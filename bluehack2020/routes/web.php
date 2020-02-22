<?php

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

use App\Http\Controllers\TransportationController;

Route::get('/', function () {
    return view('index');
});
Route::get('/dictionary', function(){
    return view('dictionary.search_nav');
});
Route::get('/trans', function(){
    return view('transportation.trans');
});



Route::post('/result', 'SearchController@show')->name('dropresult');
Route::get('/trans', 'TransportationController@index')->name('transportation.lasnding');
Route::post('/ride/result', 'ResultController@result')->name('transportation.result');
Route::post('/ride/book', 'ResultController@book')->name('transportation.book');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/TLayout', function(){
    return view('dashboard.transporter.dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/ride/approved', 'ResultController@approved')->name('book.approved');
Route::get('/ride/declined', 'ResultController@declined')->name('book.declined');
Route::get('/ride/edit', 'ResultController@edit')->name('book.edit');
Route::post('/ride/push', 'ResultController@updatedata')->name('book.update');

Route::get('/cancel', function(){
    return redirect()->back();
})->name('back');
=======
Route::get('/TuLayout', function(){
    return view('dashboard.tourist.dashboard');
});

>>>>>>> 7525dd11fe631827a8b048008a124c1c0ca4609d

