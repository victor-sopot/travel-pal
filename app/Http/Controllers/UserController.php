<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
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
        return view('users.index');
    }

    public function show($id)
    {
        $user = Auth::user();
        return view('users.show', compact('user'));
        
        // do something
        // reutnr view(users.show)
    }

    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }
}
