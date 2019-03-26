
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Admin Panel</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <!-- <link rel="stylesheet" href="dash.css"> -->

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: #F89D13;
    color: #fff;
    transition: all 0.3s;
    box-shadow:0px 0px 6px #444;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #8F1D14;
}

#sidebar ul.components {
    padding: 20px 0;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #F89D13;
    background: #fff;
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    width: calc(100% - 250px);
    padding: 40px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}
#content.active {
    width: 100%;
}


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #content {
        width: 100%;
    }
    #content.active {
        width: calc(100% - 250px);
    }
    #sidebarCollapse span {
        display: none;
    }
}

.nothing{background: none;border:none;cursor:pointer;}


        </style>

    </head>
    <body>
    
        
           
            <div class = "row">
                 <!-- Sidebar Holder -->
                <div class = "col-md-4">                    
                  <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">
                        <i class="fas fa-tachometer-alt"></i><br>
                        Admin Panel
                    </h3>
                </div>

                <ul  class="nav nav-tabs list-unstyled components" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#bike" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fas fa-motorcycle"></i>&nbsp;
                            Bike
                        </a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#car" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fas fa-car"></i>&nbsp;
                            Car
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link " id="home-tab" data-toggle="tab" href="#article" role="tab" aria-controls="home" aria-selected="true">article</a>
                      </li>
                    <li>
                        <a href="{{ url('/logout') }}"> 
                            <i class="fas fa-sign-out-alt"></i>&nbsp;
                            Log Out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

         <!-- Sidebar Holder  ends here-->

        <div class = "col-md-7">
            <!-- Page Content Holder -->
            <div class="tab-content" id="myTabContent">
              
                <div class="tab-pane fade show active" id="bike" role="tabpanel" aria-labelledby="profile-tab">

                       <div class="card" style="padding:20px;">
                    <div class="top">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                                <a class="nav-link ser-link" href="{{ route('cars') }}"><i class="fas fa-wrench"></i>&nbsp; add bike  </a>
                            </li>
                    </div>
                    <br><br>
                    <table class="table table-hover">
                        <tr class="text-info">
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                             @foreach($cars as $car)
                        <tr>
                            <td>001</td>
                            <td>{{$car["brand"]}}</td>
                            <td>{{$car["model"]}}</td>
                            <td>{{$car["type"]}}</td>
                            <td>{{$car["color"]}}</td>
                            <td>{{$car["price"]}}</td>
                            <td>
                                <button class="text-info nothing" data-toggle="modal" data-target="#edit_bike">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-danger nothing" data-toggle="modal" data-target="#del_bike">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                          @endforeach
                    </table>
                </div>
                </div>


                <div class="tab-pane  fade show " id="car" role="tabpanel" aria-labelledby="contact-tab">            
                         
                <div class="card" style="padding:40px;">
                    <div class="top">
                        <li class="nav-item">
                                <a class="nav-link ser-link" href="{{ route('cars') }}"><i class="fas fa-wrench"></i>&nbsp; add cars  </a>
                        </li>
                    </div>
                    <br><br>
                    <table class="table table-hover">
                        <tr class="text-info">
                            <th>ID</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Type</th>
                            <th>Color</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                             @foreach($cars as $car)
                        <tr>
                            <td>001</td>
                            <td>{{$car["brand"]}}</td>
                            <td>{{$car["model"]}}</td>
                            <td>{{$car["type"]}}</td>
                            <td>{{$car["color"]}}</td>
                            <td>{{$car["price"]}}</td>
                            <td>
                                <button class="text-info nothing" data-toggle="modal" data-target="#edit_bike">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-danger nothing" data-toggle="modal" data-target="#del_bike">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                          @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
