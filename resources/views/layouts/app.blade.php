<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   
    





    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="Enroot mumbai, em, mumbai, Enroot, problem, solutions, enrt mmbai, mumbai solution, blog, blog, Enroot blogs, engineer blogs, social blogs">

    <!-- Favicon -->
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
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

</head>
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
    <main class="py-4">
            @yield('content')
        </main>
</body>
</html>