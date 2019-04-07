<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use Session;

class CarsController extends Controller
{


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

        try {
//dd($request->all());
            //Result Image
            $imageFile = $request->file('car_image');
//            dd($imageFile);
            $imageFilenameWithExt = $imageFile->getClientOriginalName();
            $imageFilename = pathinfo($imageFilenameWithExt, PATHINFO_FILENAME);
            $extension = $imageFile->getClientOriginalExtension();
            $imageFileNameToStore = $imageFilename . '_' . time() . '.' . $extension;

            $imagedata = [
                'image' => $imageFilename,
                'path' => $imageFile->storeAs('image', $imageFileNameToStore, 'public'),
                'meta' => 'Car_Image',
            ];
//            dd($imagedata);
            $data = [
                'brand' => $request->get('brand'),
                'model'=> $request->get('model'),
                'type'=> $request->get('type'),
                'color'=> $request->get('color'),
                'price'=> $request->get('price'),
            ];

//            dd($data);
            $d =cars::create($data);
            $d->image()->create($imagedata);
            Session::flash('success', 'Car has been added');
            return redirect('/home');

        } catch (\Exception $e) {
            Session::flash('fail', 'Result is not created');
            return redirect('/home');
        }
        dd($request->all());

//      $cars = new Cars([
//        'brand' => $request->get('brand'),
//        'model'=> $request->get('model'),
//        'type'=> $request->get('type'),
//        'color'=> $request->get('color'),
//        'price'=> $request->get('price')
//
//      ]);
//      $cars->save();
//      return redirect('/home')->with('success', 'cars has been added');
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