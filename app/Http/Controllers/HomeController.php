<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // extract the list of countries to pass to the view
        $countries = Country::orderBy('name')->get();
        
        return view('home', compact('countries'));
    }

    public function provider()
    {
        $rovers = DB::table('rovers')->join('countries', 'country_id', '=', 'countries.id')->select('rovers.*', 'countries.name')->get();

        // dd($rovers);
        return $rovers->toJson();
    }
}
