<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;

class CarsController extends Controller
{
    function upload(Request $request)
    {
        $this->validate($request, [
            'select_file' => 
            'required| image| mimes:jpeg,png,jpg|max:2048']);
        $image =  $request->file('select_file');
        $new_image = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("images"), $new_name);
        return back()->with('success', 'image upload success')->with('path', $new_name);
    }
   


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('cars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'select_file' => 
        //     'required| image| mimes:jpeg,png,jpg|max:2048']);
        // $image =  $request->file('select_file');
        // $new_image = rand() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path("images"), $new_name);

      $cars = new Cars([
        'brand' => $request->get('brand'),
        'model'=> $request->get('model'),
        'type'=> $request->get('type'),
        'color'=> $request->get('color'),
        'price'=> $request->get('price')
        
      ]);
      $cars->save();
      return redirect('/home')->with('success', 'cars has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Cars::find($id);
        return view('cars.edit', compact('cars'));
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
         $request->validate([
        'model'=>'required',
        'brand'=> 'required',
        'type' => 'required',
         'color' => 'required',
          'price' => 'required'
      ]);

      $cars = Share::find($id);
      $cars->model = $request->get('model');
      $cars->brand = $request->get('brand');
      $cars->type = $request->get('type');
      $cars->color = $request->get('color');
      $cars->price = $request->get('price');
      $cars->save();

      return redirect('/cars')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = cars::find($id);       
          $res = $cars->delete();
         if($res){
            return redirect('/home')->with('success', 'Deleted Successfully');
        }else{
             return redirect('/home')->with('error', 'Failed to delete');
        }

    
    }

}