<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\cars;

Route::get('/', function () {

    $cars = Cars::all();
    return view('welcome')->with('cars', $cars)->with('test', 'success');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/service', 'ServiceController@service')->name('service');

 Route::get('/cars', 'CarsController@index')->name('cars');

Route::post('/cars/store/', 'CarsController@store')->name('cars.store');
