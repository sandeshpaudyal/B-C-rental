<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;

class ShowmoreController extends Controller
{
     public function index()
    {
    	$cars = Cars::all();      
        return view('showmore')->with('cars', $cars);
    }
}
