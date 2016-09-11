<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::take(20)->get();
        return view('home', compact('countries'));
    }

    public function provider()
    {
        $rovers = DB::table('rovers')->join('countries', 'country_id', '=', 'countries.id')->select('rovers.*', 'countries.name')->get();
        // dd($rovers);
        return $rovers->toJson();
    }
}
