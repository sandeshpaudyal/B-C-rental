<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;
use App\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Cars::all();
        $user = User::all();
        return view('home')->with('cars', $cars) ->with('users', $user);
    }

     public function dashboard()
    {
        $cars = Cars::all();
         $user = User::all();
        return view('dashboard')->with('cars', $cars)->with('users', $user);
    }

   
}
