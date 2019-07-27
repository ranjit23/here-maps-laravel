
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
                                    <a href="{{ url('/customers/create')}}">Create customers request</a>
                                   
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
	
	

   
    
    <!-- Page Title Begin -->
    <section class="page-title-bg pt-250 pb-100" data-bg-img="{{ URL::asset('img/section-pattern/page-title.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Blog</h2>
                        <ul class="list-inline">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Blog Begin -->
	@foreach ($customers as $customer)
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
                            <p class="posted-on">{{$customer->created_at}}</p>
                            <p class="category">{{$customer->route_a}} to </p>
                    
                            <h3 class="blog-title">{{$customer->route_b}}</h3>
                            <h3 class="blog-title">{{$customer->vehicle_no}}</h3>

                    
                            <p class="blog-excerpt"></p>
                        </div>
                        <!-- Blog Content End -->
						
                    
                        <!-- Blog Hover Begin -->
                        <div class="blog-hover text-center text-white position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-overlay"
                            data-bg-img="assets/img/blog/blog-1.jpg">
                            <h3 class="blog-title"><a href="#">{{$customer->company_name}}</a></h3>
                        </div>
						
                        <!-- Blog Hover End -->
                    
                        <!-- Blog Button Begin -->
                        <div class="blog-button position-absolute w-100 d-flex align-items-center justify-content-center" data-bg-img="">
                            <img src="{{ URL::asset('img/shapes/blog-shape.svg') }}" class="svg" alt="">
                            <a href="/customers/{{$customer->id}}" class="btn-inline">Read More</a>
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