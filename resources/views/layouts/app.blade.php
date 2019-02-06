<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="/dist/css/main.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/dist/images/logo_bg_color.png" height="20px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
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
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<!-- Footer-->
<section class="image-bg footer lis-grediant grediant-bt pb-0" style="background-image: url('/dist/images/bg3.jpg'); margin-top: 10%;">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="footer-head">Useful Links</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Register</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</A></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="footer-head">My Account</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Dashboard</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Profile</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> My Listing</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Favorites</A></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-md-0">
                        <h5 class="footer-head">Pages</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Blog</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Our Partners</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> How It Work</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Privacy Policy</A></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h5 class="footer-head">Help</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Register</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</A></li>
                            <li><A href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</A></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-logo">
                    <a href="#"><img src="dist/images/logo.png" alt="" class="img-fluid" /></a>
                </div>
                <p class="my-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu in  felis eu pede mollis enim.</p>
                <a href="#" class="text-white"><u>App Download</u></a>
                <ul class="list-inline mb-0 mt-2">
                    <li class="list-inline-item"><A href="#"><img src="dist/images/play-store.png" alt="" class="img-fluid" /></a></li>
                    <li class="list-inline-item"><A href="#"><img src="dist/images/google-play.png" alt="" class="img-fluid" /></a></li>
                    <li class="list-inline-item"><A href="#"><img src="dist/images/windows.png" alt="" class="img-fluid" /></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <span> &copy; 2018 Perimi. Powered by <a href="http://www.enovait.com.ng" class="lis-primary" target="_blank">Enovait.</a></span>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right">
                    <ul class="list-inline footer-social mb-0">
                        <li class="list-inline-item pr-3"><A href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item pr-3"><A href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item pr-3"><A href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item pr-3"><A href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li class="list-inline-item"><A href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  Footer-->
</body>
</html>
