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
<<<<<<< HEAD
Route::post('/result', 'SearchController@show')->name('dropresult');
=======
Route::get('/trans', 'TransportationController@index')->name('transportation.lasnding');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 9acc750887016b4387cc8493b0ed2f0527c8f9b1
