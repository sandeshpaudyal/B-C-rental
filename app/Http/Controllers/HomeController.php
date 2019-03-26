<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;

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
        echo "hello";
        dd($cars);
        return view('home')->with('cars', $cars)->with('test', 'success');
    }

   
}
