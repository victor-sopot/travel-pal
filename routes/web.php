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

	Route::get('/home', 'HomeController@index');
	Route::get('/provider', 'HomeController@provider');
	Route::post('/search', 'SearchController@country'); // SEARCH
	Route::get('/profile', 'UserController@profile');
	Route::get('/', 'HomeController@index');
	Route::resource('bookings', 'BookingsController');
	Route::resource('users', 'UserController');
	
	Route::resource('rovers', 'RoverController');
	Route::resource('countries', 'CountryController');
	Route::resource('cities', 'CityController');

	Route::resource('countries.cities', 'CountryCityController');
	Route::resource('countries.cities.rovers', 'CountryCityRoverController');
});



Auth::routes();
