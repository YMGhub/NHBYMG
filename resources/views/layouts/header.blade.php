<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NHC Barbados</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link rel="icon" href="{{ asset('/images/logo.jpeg') }}">



    <link rel="stylesheet" href="{{ asset('css/style_new26.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-template2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">



</head>



<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="wrapper">
        <header id="header-container">

            <!-- Topbar -->
            <div id="top-bar">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Top bar -->
                        <ul class="top-bar-menu">
                            <li><i class="fa fa-phone"></i><a href="tel:12465365300">1-246-536-5300</a></li>
                            <li><i class="fa fa-envelope"></i> <a
                                    href="mailto:NHC.CustomerService@barbados.gov.bb">NHC.CustomerService@barbados.gov.bb</a>
                            </li>
                            <!-- <li>
                                        <div class="top-bar-dropdown">
                                            <span>Dropdown Menu</span>
                                            <ul class="options">
                                                <li>
                                                    <div class="arrow"></div>
                                                </li>
                                                <li><a href="#">Nice First Link</a></li>
                                                <li><a href="#">Second Link With Long Title</a></li>
                                                <li><a href="#">Third Link</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                        </ul>

                    </div>
                    <!-- Left Side Content / End -->


                    <!-- Left Side Content -->
                    <!-- <div class="right-side">
                                <ul class="social-icons">
                                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                                    <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
                                </ul>

                            </div> -->
                    <!-- Left Side Content / End -->

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->


            <!-- Header -->
            <div id="header">
                <div class="container">
                    @php
                        $settings = App\Models\SiteSetting::first();
                    @endphp

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo">
                            @if ($settings && $settings->logo)
                                <a href="/"><img src="{{ asset('storage/' . $settings->logo) }}"
                                        alt=""></a>
                            @endif
                        </div>


                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>


                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">

                                <li><a class="{{ Request::is('/') ? 'current' : '' }}" href="/">Home</a>
                                    <!-- <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                            </ul> -->
                                </li>
                                <li><a class="{{ Request::is('about-us') ? 'current' : '' }}" href="/about-us">About
                                        Us</a>
                                    <ul>
                                        <li><a class="{{ Request::is('mission-and-vision') ? 'current' : '' }}"
                                                href="/mission-and-vision">Mission Statement</a></li>
                                        <li><a class="{{ Request::is('our-executives') ? 'current' : '' }}"
                                                href="our-executives">Our Executives</a></li>
                                        <li><a class="{{ Request::is('our-department') ? 'current' : '' }}"
                                                href="our-department">Our Departments</a></li>
                                        <li><a class="{{ Request::is('commercial-endeavors') ? 'current' : '' }}"
                                                href="commercial-endeavors">Commercial Endeavours</a></li>
                                        <li><a class="{{ Request::is('careers') ? 'current' : '' }}"
                                                href="careers">Careers</a></li>


                                    </ul>
                                </li>
                                <li><a class="{{ Request::is('our-services') ? 'current' : '' }}"
                                        href="/our-services">Our
                                        Services</a>
                                <li><a class="{{ Request::is('projects') ? 'current' : '' }}" href="/projects">Our
                                        Projects</a></li>

                                {{-- <li><a class="{{ Request::is('mission-and-vision') ? 'current' : '' }}" style="width: 102px;" href="/mission-and-vision">Mission & Vision</a> --}}
                                <li><a class="{{ Request::is('faq') ? 'current' : '' }}" href="faq">FAQ</a>
                                </li>
                                <li><a class="{{ Request::is('contact') ? 'current' : '' }}" href="contact">Contact
                                        Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                        <!-- Main Navigation / End -->

                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side">
                        <!-- Header Widget -->
                        <div class="header-widget">

                            @if (\Illuminate\Support\Facades\Auth::check())
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <nav id="navigation" class="style-1">
                                    <ul id="responsive">
                                        <li class="dropdown"> <a href="#" class="profile-link dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-user"></i> Profile </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('profile.show') }}">View Profile</a></li>
                                                {{-- <li><hr class="dropdown-divider"></li> --}}
                                                <li>
                                                    <a href="#" class="dropdown-item"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            @else
                                <a href="{{ route('login') }}" class="sign-in"><i class="fa fa-user"></i> Log In /
                                    Register</a>
                            @endif
                            <a href="/application-for-rental" class="button border">Apply Now</a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <main class="">
