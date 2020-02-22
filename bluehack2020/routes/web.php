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
    return view('welcome');
});
Route::get('/dictionary', function(){
    return view('dictionary.search_nav');
});
Route::get('/trans', 'TransportationController@index')->name('transportation.lasnding');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
