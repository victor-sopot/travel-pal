<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Rover;
use Auth;

class RoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Auth::user()->isRover) {
            $response = "You're already a TravelPal!";
            return view('errors.rover', compact('response'));
        }

        $cities = City::all();

        return view('rovers.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Auth::user()->rover
            // redirect('/pal/error');
            $this->validate($request, [
                'bio' => 'bail|required|max:255',
                'tel' => 'bail|required|unique:rovers|digits_between:7,16',
            ]);

            $city_id = $request->city;
            $city = City::find($city_id);
            $country_id = $city->country->id;
            $bio = $request->bio;
            $rating = 2.5;
            $tel = $request->tel;

            $rover = Rover::create(['city_id' => $city_id, 'country_id' => $country_id, 'bio' => $bio, 'rating' => $rating, 'tel' => $tel]);

            $user = Auth::user();
            $user->rover_id = $rover->id;
            $user->save();
            return redirect()->route('pal.welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Rover $rover)
    {
        return view('rovers.show', compact('rover'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('rovers.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function welcome()
    {
        $pal = Auth::user();
        return view('rovers.welcome', compact('pal'));
    }
}
