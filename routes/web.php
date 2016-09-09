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
	$pageTitle = "Find A Local";

    return view('home', compact('pageTitle'));
})->name('Homepage');

Auth::routes();

Route::get('/search', function() {
	$pageTitle = 'Discover Somewhere New';

	return view('search', compact('pageTitle'));
})->middleware('auth');



Route::get('/profile', 'UserController@index')->middleware('auth');
Route::get('/home', 'HomeController@index');
Route::resource('bookings', 'BookingsController');
Route::resource('users', 'UserController');
Route::resource('rovers', 'RoverController');