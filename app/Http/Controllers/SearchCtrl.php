<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;

use App\Http\Requests;

class SearchCtrl extends Controller
{
    public function country(Request $request)
    {
    	// Get the user submitted country id
    	$country_id = $request->input('country');

    	// get that country just to have
    	$country = Country::where('id', '=', $country_id)->get();

    	$response = [
    		'cities' => [],
    		'country' => $country
    	];

    	// Get all of its cities
        $cities = City::where('country_id', '=', $country_id)->get();

        // Store them into the response
        foreach($cities as $city){
        	$response['cities'][] = [
        	'id' => $city->id,
        	'name' => $city->name
        	];
        }
        // Return to view
        return view('search.cities')->with('response', $response);
        //return $response;
    }
}
