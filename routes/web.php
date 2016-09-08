<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/search', function() {
	return view('search');
});

Route::get('/profile', 'UserController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/bookings', 'Bookings@index');
Route::get('bookings/create', 'Bookings@create')->name('bookings.create');
Route::post('bookings', 'Bookings@store');
Route::delete('/bookings/{booking}', 'Bookings@destroy');