
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="favicon.png">

<!-- Web Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli%7CRubik:400,400i,500,700">

<!-- ======= Bootstrap CSS ======= -->
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"> 

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>

<!-- ======= Font Awesome CSS ======= -->
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

<!-- ======= Owl Carousel CSS ======= -->
<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">

<!-- ======= Magnific Popup CSS ======= -->

<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.min.css') }}">

<!-- ======= Main Stylesheet ======= -->
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

<!-- ======= Custom Stylesheet ======= -->
<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}"></head>
<body>
<!-- Header Begin -->
<header class="header fixed-top">
        <!-- Header Style One Begin -->
        <div class="fixed-top header-main style--one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-4 col-8">
                        <!-- Logo Begin -->
                        <div class="logo">
                            <a href="index.html">
                                <img class="default-logo" src="{{ URL::asset('img/logo.png') }}" data-rjs="2" alt="">
                                <img class="sticky-logo" src="{{ URL::asset('img/sticky_logo.png') }}" data-rjs="2" alt="">
                            </a>
                        </div>
                        <!-- Logo End -->
                    </div>

                    <div class="col-lg-9 col-sm-8 col-4">
                        <!-- Main Menu Begin -->
                        <div class="main-menu d-flex align-items-center justify-content-end">
                            <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="projects.html">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="projects.html">Events Details</a></li>
                                        <li><a href="project-details.html">project details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">Team</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
 -->                                </li>
                                <li class="current-menu-parent menu-item-has-children">
                                    <a href="blog.html">Blog</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-single-column.html">Blog Single Colunm</a></li>
                                        <li><a href="blog-two-column.html">Blog two Colunm</a></li>
                                        <li><a href="blog-with-sidebar.html">Blog with Sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul> -->
                                </li>
                                <li class=" menu-item-has-children">
                                    <a href="{{ url('/transports/create')}}">Create transport</a>
                                   
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <ul class="navbar-nav ml-auto">
                         <!-- Authentication Links -->
                        @guest
                        <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                            
                            @if (Route::has('register'))
                            <ul class="nav align-items-center">
                                <li class="menu-item-has-children">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Landing Page</a></li>
                                        <li><a href="home-1.html">home v1</a></li>
                                        <li><a href="home-2.html">home v2</a></li>
                                    </ul> -->
                                </li>
                                
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest 
                    </ul>
                            </ul>
                            <!-- Offcanvas Holder Trigger -->
                                <span></span>
                                <span></span>
                                <span></span>
                            <!-- Offcanvas Trigger End -->
                        </div>
                        <!-- Main Menu ENd -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Style One End -->
    </header>
    <!-- Header End -->
	
	

   
    
   

    <!-- Blog Begin -->
	@foreach ($transports as $transport)
    <section class="pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Single Blog Item Begin -->
                    <div class="single-blog-item position-relative">
                        <!-- Blog Bg Shape -->
                        <div class="date-bg-shape position-absolute">
                            <img src="{{ URL::asset('img/shapes/blog-date-shape.svg') }}" class="svg" alt="">
                        </div>
                        <!-- End Blog Bg Shape -->
                    
                        <!-- Blog Content Begin -->
                        <div class="blog-content">
                            <p class="posted-on">{{$transport->created_at}}</p>
                            <h3 class="category">{{$transport->route_a}} to </h3>
                    
                            <h3 class="blog-title">{{$transport->route_b}}</h3>
                            <p class="blog-title">Available length:{{$transport->available_length}}</p>
                            <p class="blog-title">Available breadth:{{$transport->available_breadth}}</p>
                            <p class="blog-title">Available height:{{$transport->available_height}}</p>

                    
                            <p class="blog-excerpt"></p>
                        </div>
                        <!-- Blog Content End -->
						
                    
                        <!-- Blog Hover Begin -->
                        <div class="blog-hover text-center text-white position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-overlay"
                            data-bg-img="assets/img/blog/blog-1.jpg">
                            <h3 class="blog-title"><a href="#">Company Name: {{$transport->company_name}}</a></h3>
                        </div>
						
                        <!-- Blog Hover End -->
                    
                        <!-- Blog Button Begin -->
                        <div class="blog-button position-absolute w-100 d-flex align-items-center justify-content-center" data-bg-img="">
                            <img src="{{ URL::asset('img/shapes/blog-shape.svg') }}" class="svg" alt="">
                            <a href="/customers/create" class="btn-inline">Pay</a>
                        </div>
                        <!-- Blog Button End -->
                    </div>
                    <!-- Single Blog Item End -->
                </div>
                
               
                </div>
            </div>
        </div>
        @endforeach
    </section>


<script>
const http = require('http');
const express = require('express');
const bodyParser = require('body-parser');
const request = require('request');

const app = express();
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
   extended: true
}));

//HERE credentials
const here = {
   id: 'dbzXQJktFSAh5FxYGSnJ',
   code: 'FZ7Iz4AwrCj-UG5nwJFDTg',
   token: 'HERE_XYZ_TOKEN'
}



const source = 'Mumbai';
const destination='Delhi';
const source_geo = `https://geocoder.api.here.com/6.2/geocode.json?app_id=${here.id}&app_code=${here.code}&searchtext=${source}`;
const destination_geo = `https://geocoder.api.here.com/6.2/geocode.json?app_id=${here.id}&app_code=${here.code}&searchtext=${destination}`;

request.get(source_geo, (error, response, body) => {
   const source_geocodeJson = JSON.parse(body);
    const source_coordinates = {
      lat: source_geocodeJson.Response.View[0].Result[0].Location.DisplayPosition.Latitude,
      long: source_geocodeJson.Response.View[0].Result[0].Location.DisplayPosition.Longitude,
    
   };

   console.log(source_coordinates)
});

request.get(destination_geo, (error, response, body) => {
   const destination_geocodeJson = JSON.parse(body);
   const destination_coordinates = {
      lat: destination_geocodeJson.Response.View[0].Result[0].Location.DisplayPosition.Latitude,
      long: destination_geocodeJson.Response.View[0].Result[0].Location.DisplayPosition.Longitude,
    
   };
   console.log(destination_coordinates)
});


 const waypoint= `http://fleet.api.here.com/2/calculateroute.json?app_id=${here.id}&app_code=${here.code}&mode=fastest;truck;traffic:disabled&departure=now&tollVehicleType=9&routeMatch=1&vehicleWeight=1t&waypoint0=50.10992,8.69030&waypoint1=50.00658,8.29096`;

 request.get(waypoint, (error, response, body) => {
    
   const wps_json= JSON.parse(body);
   const wps_route={
      source : wps_json.response.route[0].waypoint[0].mappedPosition,
      destination : wps_json.response.route[0].waypoint[1].mappedPosition


   };
   console.log(wps_route)

   const optimum_path =`http://route.api.here.com/routing/7.2/calculateroute.json?app_id=${here.id}&app_code=${here.code}&waypoint0=${wps_route.source.latitude,wps_route.source.longitude}&waypoint1=${wps_route.destination.latitude,wps_route.destination.longitude}`;


 });
    </script>


    <!-- Blog End -->
	
	 <!-- Back to Top End -->

    <!-- ======= jQuery Library ======= -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    
    <!-- ======= Bootstrap Bundle JS ======= -->
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- =======  Mobile Menu JS ======= -->
    <script src="{{ URL::asset('js/menu.min.js') }}"></script>
    
    <!-- ======= Waypoints JS ======= -->
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    
    <!-- ======= Counter Up JS ======= -->
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
    
    <!-- ======= Owl Carousel JS ======= -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    
    <!-- ======= Isotope JS ====== -->
    <script src="{{ URL::asset('js/isotope.pkgd.min.js') }}"></script>
    
    <!-- ======= Magnific Popup JS ======= -->
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    
    <!-- ======= Countdown JS ======= -->
    <script src="{{ URL::asset('js/countdown.min.js') }}"></script>
    
    <!-- ======= Retina JS ======= -->
    <script src="{{ URL::asset('js/retina.min.js') }}"></script>
	
    
    <!-- ======= Google API ======= -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjkssBA3hMeFtClgslO2clWFR6bRraGz0"></script>
    
    <!-- ======= Main JS ======= -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
    
    <!-- ======= Custom JS ======= -->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>