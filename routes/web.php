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

Route::group(['middleware' => 'auth'], function() {

	Route::get('/provider', 'HomeController@provider');
	Route::post('/search', 'SearchCtrl@country');
	Route::get('/profile', 'UserController@profile');
	Route::get('/', 'HomeController@index');
	Route::resource('bookings', 'BookingsController');
	Route::resource('users', 'UserController');
	Route::resource('rovers', 'RoverController');
	Route::resource('countries.cities', 'CityCtrl');
	Route::resource('countries', 'CountryCtrl');
});



Auth::routes();
