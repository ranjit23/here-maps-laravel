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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('transports','TransportController');
Route::resource('customers','CustomerController');
Route::get('/apis', 'ApiController@index');
Route::get('/map', function(){
    return view('mapview');
});
Route::get('/route', function(){
    return view('route');
});
Route::get('/demand', function(){
    return view('demand');
});


