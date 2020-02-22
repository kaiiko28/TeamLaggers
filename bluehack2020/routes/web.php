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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/TLayout', function(){
    return view('dashboard.transporter.dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/TuLayout', function(){
    return view('dashboard.tourist.dashboard');
});


