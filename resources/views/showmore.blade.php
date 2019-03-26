
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class = "col-md-12 ml-auto mr-auto contentmain">
            <div class ="row">
                <div class = "col-md-6 imagecolhome">
                    <img src="{{URL::asset('/image/ourcar.png')}}">
                </div>
                <div class = "col-md-6 start">
                    <div class="motto">
                        <h1>YOUR NEXT RIDE</h1>
                        <h1>IS JUST A CLICK AWAY</h1>
                    </div>
                    <span class="float-right slogan">
                        Seach from our database <br>
                        of more than 15k+ bikes and cars.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <br><br>    
    <div class="row">
        <div class="col-md-8">
            <h5 class="text-secondary">
                Recently Added Bikes and Cars
            </h5>
            <div class="row">
                @foreach($cars as $car)
                    <div class="col-md-8">
                        <div class="info">
                            <img src="{{asset('/image/products/001.png')}}" class="infoimg" alt="">
                            <div class="infotext">
                                <span class="infoname">HYUNDAI PRO</span>
                                <span class="float-right new">NEW</span><br><br>
                                <table>
                                    <tr>
                                        <td>Brand:</td>
                                        <td>{{$car["brand"]}}</td>
                                    </tr>
                                    <tr>
                                        <td>Model </td>
                                        <td>{{$car["model"]}}</td>
                                    </tr>
                                    <tr>
                                        <td>Type:</td>
                                        <td>{{$car["type"]}}</td>
                                    </tr>
                                     <tr>
                                        <td>Color:</td>
                                        <td>{{$car["color"]}}</td>
                                    </tr>
                                    <tr>
                                        <td>Price:</td>
                                        <td>{{$car["price"]}}</td>
                                    </tr>
                                </table><br>
                                <div class="text-center">
                                   
                                     
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div><br>
            
</div>
</div>
<br><br>
<div class="container-fluid foot">
    <div class="text-center">
        <a href="#" class="foota">About</a>
        <a href="#" class="foota"> Contact</a>
        <a href="#" class="foota">Help</a> <br>
        Copyright 2019. All Rights Reserved
    </div>
</div>

@endsection