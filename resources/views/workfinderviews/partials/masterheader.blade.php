<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false,'borderRadius': 0, 'colorPrimary': '#89b837', 'colorSecondary': '#78A330', 'colorTertiary': '#DFE5EA', 'colorQuaternary': '#444'}">

<!-- Mirrored from preview.oklerthemes.com/porto/5.1.0/demo-digital-agency-contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Feb 2017 22:26:30 GMT -->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Work Finder</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{url('img/apple-touch-icon.png')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url('css/theme.css')}}">
    <link rel="stylesheet" href="{{url('css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{url('css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{url('css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{url('vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{url('vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{url('vendor/rs-plugin/css/navigation.css')}}">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{url('css/skins/skin-digital-agency.css')}}">		<script src="{{url('master/style-switcher/style.switcher.localstorage.js')}}"></script>

    <!-- Demo CSS -->		<link rel="stylesheet" href="{{url('css/demos/demo-digital-agency.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{url('css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{url('vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-narrow header-semi-transparent" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 1, "stickySetTop": "0"}'>
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="demo-digital-agency.html">
                                <img alt="Porto" width="200" height="50" src="{{url('img/demos/digital-agency/logo-digital-agency.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav header-nav-stripe">
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="header-social-icons social-icons hidden-xs">
                                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1 collapse">
                                    <nav>
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li >
                                                <a href="{{url('/')}}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="about.html">
                                                    About
                                                </a>
                                            </li>

                                            @if(isset($role)&&$role=='Worker')
                                                <li style="background-color: red;color: white">
                                                    <a href="#">
                                                     @if(Auth::User()->status==1)
                                                     Approved
                                                     @elseif(Auth::User()->status==0)
                                                     Pending
                                                     @endif
                                                    </a>
                                                </li>
                                            @endif
                                            <li>
                                                <a href="#">
                                                    Become Worker
                                                </a>
                                            </li>
                                                @if (Auth::guest())
                                                    <li><a href="/auth/login">Login</a></li>
                                                    <li><a href="/auth/register">Register</a></li>
                                                @else
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="/auth/logout">Logout</a></li>
                                                        </ul>
                                                    </li>
                                                 @endif
                                            <li>
                                                <a href="contact.html">
                                                    Contact
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
