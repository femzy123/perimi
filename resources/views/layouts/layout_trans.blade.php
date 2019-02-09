<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perimi</title>
    <link rel="shortcut icon" href="storage/images/favicon.ico">
    <!--Plugin CSS-->
    <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.0beta/css/icofont.css">


    <!--main Css-->
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">

</head>
<body>
<!-- header -->
<div id="header-fix" class="header fixed-top transperant">
    <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-light py-lg-0 py-4">
        <a class="navbar-brand mr-4 mr-md-5" href="/"><img src="img/images/logo.png" alt="Logo" height="30px"></a>

        <div id="dl-menu" class="dl-menuwrapper d-block d-lg-none float-right">
            <button>Open Menu</button>
            <ul class="dl-menu">

                <li class="nav-item active dropdown">
                    <a class="nav-link" href="/" data-toggle="dropdown" aria-expanded="false">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing</a>
                    <ul class="dl-submenu">
                        <li class="dl-back"><a href="#">back</a></li>
                        <li class="dropdown-submenu"><a tabindex="-1" href="/category">Listing By Categories</a>
                        </li>
                        {{--<li class="dropdown-submenu"><a tabindex="-1" href="listing-no-map-fullwidth.html">Listing No Map</a>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown-submenu"><a tabindex="-1" href="half-screen-search-sidebar-place.html">Half Screen Map</a>--}}
                        {{--</li>--}}
                    </ul>
                </li>
                <li><a href="../#modal" class="text-white login_form"><i class="fa fa-sign-in pr-2"></i> Sign In | Register</a></li>

                <li> <a href="add-listing.html" ><i class="fa fa-plus pr-1"></i> Add Listing</a></li>



            </ul>
        </div>


        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active dropdown">
                    <a class="nav-link" href="/" data-toggle="dropdown" aria-expanded="false">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing</a>
                    <ul class="dropdown-menu">
                        <li class="">
                            <a tabindex="-1" href="/category">Listing By Categories</a>
                        </li>
                        {{--<li class="">--}}
                        {{--<a tabindex="-1" href="listing-no-map-fullwidth.html">Listings No Map</a>--}}
                        {{--</li>--}}
                        {{--<li class="">--}}
                        {{--<a tabindex="-1" href="half-screen-search-sidebar-place.html">Half Screen Map</a>--}}
                        {{--</li>--}}
                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled my-2 my-lg-0">
            {{--<li class="text-white"><i class="fa fa-sign-in pr-2"></i> <a href="#modal" class="text-white login_form">Sign In | Register</a></li>--}}
            <!-- Authentication Links -->
                @guest
                <li class="text-white"><i class="fa fa-sign-in pr-2"></i> <a href="#modal" class="text-white login_form">Sign In | Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard/{{ Auth::user()->id }}">
                                Dashboard
                            </a>
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
            <a href="#" class="btn btn-outline-light btn-sm ml-0 ml-lg-4 mt-3 mt-lg-0"><i class="fa fa-plus pr-1"></i> Add Listing</a>
        </div>
    </nav>
</div>

@yield('content')

<!-- Footer-->
<section class="image-bg footer lis-grediant grediant-bt pb-0">
    <div class="background-image-maker"></div>
    <div class="holder-image">
        <img src="img/images/bg3.jpg" alt="" class="img-fluid d-none">
    </div>
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="footer-head">Useful Links</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Register</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="footer-head">My Account</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Dashboard</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> My Listing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Favorites</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-md-0">
                        <h5 class="footer-head">Pages</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Blog</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Our Partners</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> How It Work</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h5 class="footer-head">Help</h5>
                        <ul class="list-unstyled footer-links lis-line-height-2_5">
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Add Listing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Sign In</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Register</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Pricing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right pr-1"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-logo">
                    <a href="#"><img src="img/images/logo.png" alt="" class="img-fluid" /></a>
                </div>
                <p class="my-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu in  felis eu pede mollis enim.</p>
                <a href="#" class="text-white"><u>App Download</u></a>
                <ul class="list-inline mb-0 mt-2">
                    <li class="list-inline-item"><a href="#"><img src="img/images/play-store.png" alt="" class="img-fluid" /></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/images/google-play.png" alt="" class="img-fluid" /></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/images/windows.png" alt="" class="img-fluid" /></a></li>
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
                        <li class="list-inline-item pr-3"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item pr-3"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item pr-3"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="list-inline-item pr-3"><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  Footer-->

<!-- Top To Bottom-->
<a href="#" class="scrollup text-center lis-bg-primary lis-rounded-circle-50">
    <div class="text-white mb-0 lis-line-height-1_7 h3"><i class="icofont icofont-long-arrow-up"></i></div>
</a>
<!-- End Top To Bottom-->

<!-- Login /Register Form-->
<div class="container">
    <div id="modal" class="popupContainer" style="display: none;">
        <header class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>

        <div class="popupBody">
            <!-- Social Login -->

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <input id="email" type="email" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <br>

                    <input id="password" type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <br>

                    <div class="checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="action_btns">
                        <button type="submit" class="btn btn-info btn-default mt-3 w-100">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <a class="checkbox" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </form>
                <br/>
                {{--Sign in with your social network<br/>--}}
                {{--<ul class="list-inline my-0">--}}
                {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>--}}
                {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>                   --}}
                {{--</ul>--}}
                <hr/>
                Don't have an account <a href="/register">Sign Up</a>
            </div>

            <!-- Register Form -->
            {{--<div class="user_register">--}}
            {{--<form>--}}

            {{--<input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Username" />--}}
            {{--<br />--}}


            {{--<input type="email" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Email Address" />--}}
            {{--<br />--}}


            {{--<input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Password" />--}}
            {{--<br />--}}

            {{--<div class="checkbox">--}}
            {{--<input id="send_updates" type="checkbox" />--}}
            {{--<label for="send_updates">Send me occasional email updates</label>--}}
            {{--</div>--}}

            {{--<div class="action_btns">--}}
            {{--<a href="#" class="btn btn-info btn-default mt-3 w-100">Register</a>--}}
            {{--</div>--}}
            {{--</form>--}}
            {{--<br/>--}}
            {{--Register with your social network<br/>--}}
            {{--<ul class="list-inline my-0">--}}
            {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>--}}
            {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>--}}
            {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-linkedin"></i></a></li>--}}
            {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-tumblr"></i></a></li>--}}
            {{--<li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-pinterest-p"></i></a></li>--}}
            {{--</ul>--}}
            {{--<hr/>--}}
            {{--Already have an account <a href="#modal" class="login_form">Sign In</a>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
<!-- End Login /Register Form-->


<!-- jQuery -->
<script src="{{ asset('js/plugins.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/data.json') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjsIpyXFoB7_5_E2DgO_-CTDMHKM0cW4I&sensor=false&callback=initialize"></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>