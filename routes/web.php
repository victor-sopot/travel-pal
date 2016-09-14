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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {

	Route::get('/home', 'HomeController@index');
	Route::get('/provider', 'HomeController@provider');
	Route::get('/profile', 'UserController@profile');
	// Route::get('/', 'HomeController@index');
	Route::resource('bookings', 'BookingsController');
	Route::resource('users', 'UserController');
	Route::resource('cities', 'CityController');
	Route::resource('rovers', 'RoverController');
	Route::resource('countries', 'CountryController', [
		'except' => [
			'show'
		]
	]);

	Route::get('countries/{country}/{slug?}', 'CountryController@show')->name('countries.show');

	Route::get('cities/{city}/{slug?}', 'CityController@show')->name('cities.show');

	Route::get('/pal/register', 'RoverController@create');

});



Auth::routes();
