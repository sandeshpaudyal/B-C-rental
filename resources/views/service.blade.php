@extends('layouts.app')

@section('content')


<div class="container">
    <h1>service page</h1>
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
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/001.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/002.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/003.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/004.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/005.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/006.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/007.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/008.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info">
                        <img src="{{asset('/image/products/009.png')}}" class="infoimg" alt="">
                        <div class="infotext">
                            <span class="infoname">HYUNDAI PRO</span>
                            <span class="float-right new">NEW</span><br><br>
                            <table>
                                <tr>
                                    <td>Brand:</td>
                                    <td>Hyundai</td>
                                </tr>
                                <tr>
                                    <td>Model Number:</td>
                                    <td>250-T</td>
                                </tr>
                                <tr>
                                    <td>Type:</td>
                                    <td>Hatchback</td>
                                </tr>
                                <tr>
                                    <td>Made Year:</td>
                                    <td>2015</td>
                                </tr>
                            </table><br>
                            <div class="text-center">
                                <button class="btn viewbtn">
                                    VIEW MORE
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="search">
                <input type="text" class="form-control boxee" placeholder="Start Searching...">
                <br>
                <h6 style="font-weight:bold;" class="text-secondary">
                    START SEARCHING
                </h6>
                <div class="links">
                    <a href="#" class="text-info">Hyundai Pro 2018 Model S</a><br>
                    <a href="#" class="text-info">Yamaha R15</a><br>
                    <a href="#" class="text-info">Lamborghini Avendator</a><br>
                    <a href="#" class="text-info">F1 2019 Series - Ferrari</a><br>
                    <a href="#" class="text-info">Ford Mustang 1989</a><br>
                    <a href="#" class="text-info">Volkswagen Beetle 2019 model T</a><br>
                    <a href="#" class="text-info">Buggati SUV</a><br>
                    <a href="#" class="text-info">Hero hinda Splendor</a><br>
                </div>
            </div>
            <br>
            <div class="featured">
                <div class="text-center">
                    <h2 class="featuredtext">
                        FEATURED CAR <br>
                        OF THE MONTH
                    </h2><br>
                    <img src="{{asset('/image/products/lambo.png')}}" class="featuredimg" alt=""><br><br>
                    <button class="btn learnmore">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
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
