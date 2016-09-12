<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Country;
use App\Rover;
use App\User;

use App\Http\Requests;

class SearchController extends Controller
{
    public function country(Request $request)
    {
    	// Get the user submitted country id
    	$country_id = $request->input('country');

    	// get that country just to have
    	$country = Country::find($country_id);

        // Return to view
        return view('search.cities', compact('country'));
    }
}
