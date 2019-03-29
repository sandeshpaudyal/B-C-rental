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


// for admin



Route::group([ 'middleware' => ['role:Admin']], function() {
   	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
	Route::post('/cars/store/', 'CarsController@store')->name('cars.store');
	Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

//for home
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/service', 'ServiceController@service')->name('service');

Route::get('/cars', 'CarsController@index')->name('cars');

Route::get('/showmore', 'ShowmoreController@index')->name('showmore');

// for image upload

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

