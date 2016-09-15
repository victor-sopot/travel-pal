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

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/provider', 'HomeController@provider');
	Route::resource('booking', 'BookingsController');
	Route::resource('users', 'UserController');
	Route::resource('cities', 'CityController');
	Route::resource('rovers', 'RoverController');
	Route::resource('countries', 'CountryController', [
		'except' => [
			'show'
		]
	]);

	Route::post('/countries', 'CountryController@countries');
	Route::post('/booking/store', 'BookingsController@store')->name('booking.store');

	Route::get('users/profile', 'UserController@show')->name('profile');
	Route::get('countries/{country}/{slug?}', 'CountryController@show')->name('countries.show');

	Route::get('cities/{city}/{slug?}', 'CityController@show')->name('cities.show');

	Route::get('/pal/register', 'RoverController@create');
	Route::post('/pal/store', 'RoverController@store');
	Route::get('/pal/error', 'RoverController@error')->name('pal.error');
	Route::get('/rovers/{rover}/{slug?}', 'RoverController@show')->name('rovers.show');
	Route::get('/pal/welcome', 'RoverController@welcome')->name('pal.welcome');
});

Auth::routes();


