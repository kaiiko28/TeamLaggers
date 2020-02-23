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


Route::get('/', function () {
     $translated = null;
    return view('index',compact('translated'));
});
Route::get('/dictionary', function(){
    return view('dictionary.search_nav');
});
Route::get('/trans', function(){
    return view('transportation.trans');
});
Route::get('/result', function(){
    return view('dictionary.result');
})->name('dictionaryresult');



Route::get('/trans', 'TransportationController@index')->name('transportation.lasnding');
Route::post('/ride/result', 'ResultController@result')->name('transportation.result');
Route::post('/ride/book', 'ResultController@book')->name('transportation.book');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/TLayout', function(){
    return view('dashboard.transporter.dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ride/approved', 'ResultController@approved')->name('book.approved');
Route::get('/ride/declined', 'ResultController@declined')->name('book.declined');
Route::get('/ride/edit', 'ResultController@edit')->name('book.edit');
Route::post('/ride/push', 'ResultController@updatedata')->name('book.update');

Route::get('/cancel', function(){
    return redirect()->back();
})->name('back');

