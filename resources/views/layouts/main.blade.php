<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="THSecurity Company - We provide security to your valuables">
    <meta name="keywords" content="gold, tracking, transportation, safety, emergency,Security, fire, investigation, investigator, officer, protection, security, Security Camera, Care, Parking  Security">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>THSecurity Company</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">

    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon-180x180.png')}}">

    <!-- Stylesheets Start -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader Start -->
<div id="preloader">
    <div id="preloader-status"></div>
</div>
<!-- Preloader End -->
<!-- Header Start -->
<header>
    <!-- Main Menu Start -->
    <div class="hd-style1">
        <!-- Header Top Start -->
        <div class="hd-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="hd-lft">
                            <ul>
                                <li><i class="fa fa-location-arrow"></i> P.O.BOX 1503, Sunflower Ridge-Accra, Ghana</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="hd-rgt">
                            <span class="follow-title">Call us today on </span>
                            <ul>
                                <li><a><i class="fa fa-phone"></i> +(233) 322-494-467</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        <div class="mnmenu-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 nav-menu">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('img/logo2.png')}}" alt=""/></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="menu">
                                <nav id="main-menu" class="main-menu">
                                    <ul>
                                        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                        <li class="{{ Route::currentRouteName() == 'about' ? 'active' : '' }}"><a href="{{url('/about')}}">About Us</a></li>
                                        <li class="{{ Route::currentRouteName() == 'services' ? 'active' : '' }}"><a href="{{url('/services')}}">Services</a></li>
                                        <li class="{{ Route::currentRouteName() == 'track' ? 'active' : '' }}"><a href="{{url('/track-package')}}"> Track Package</a>

                                        </li>

                                        <li class="{{ Route::currentRouteName() == 'contact' ? 'active' : '' }}"><a href="{{url('/contact-us')}}">Contact Us</a></li>

                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu End -->
</header>
<!-- Header End -->

@yield('content')
<!-- Footer Section Start -->
<footer>
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-wedget-one">
                        <a href="index.html"><img src="{{asset('img/logo.png')}}" alt=""/></a>
                        <p>
                            THSecurity Company is managed by high profile well known, elite and experienced
                            personnel in the cargo and ship handling and tracking industry. Our teams are focused
                            on enhancing our services in a particular discipline be it customer relations, official computerized
                            data and operations to meet the dynamism in the shiping, delivery and tracking and handling industry.

                        </p>
                        <div hidden class="footer-social-profile">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget-menu">
                        <h2>Site links</h2>
                        <ul>
                            <li><a href="{{url('/track-package')}}">Track your Package</a></li>
                            <li><a href="{{url('/about')}}">About Us</a></li>
                            <li><a href="{{url('/services')}}">Our Services</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-wedget-four">
                        <h2>contact us </h2>
                        <div class="inner-box">
                            <div class="media">
                                <div class="inner-item">
                                    <div class="media-left">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <span class="inner-text">P.O.BOX 1503, Sunflower Ridge-Accra, Ghana</span>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="inner-item">
                                    <div class="media-left">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <span class="inner-text">trusthousescompany@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="inner-item">
                                    <div class="media-left">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <span class="inner-text">+(233) 322-494-467</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copy-right">
                        <p>&copy; Copyright 2019 <span><a href="#">THSecurity Company,</a></span> All rights reserved.<span> </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->
</footer>
<!-- Footer Section End -->
<!-- Scripts Js Start -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/owl.animate.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
<!-- Scripts Js End -->
</body>
</html>
