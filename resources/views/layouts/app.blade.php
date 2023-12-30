<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Key's Laundry @yield('title')</title>
    <meta name="description" content="">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div id="app">
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header header-sticky">
                    <!-- Logo -->
                    <div class="header-left">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('/gambar/logo laundry.png')}}" alt=""> <!-- Key's Laundry @yield('title') --></a>
                        </div>
                        <div class="menu-wrapper d-flex align-items-center">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                          
                                        <li class="{{ Request::is('/') || Request::is('home') ? 'active' : '' }}">
                                            <a href="/" class="nav-link">Home</a>
                                        </li>
                                        <li class="{{ Request::is('daftar-harga') ? 'active' : '' }}">
                                            <a href="/daftar-harga" class="nav-link">Daftar Harga</a>
                                        </li>
                                        <li class="{{ Request::is('komplain') ? 'active' : '' }}">
                                            <a href="/komplain" class="nav-link">Komplain</a>
                                        </li>
                                        <li class="{{ Request::is('ulasan') ? 'active' : '' }}">
                                            <a href="/ulasan" class="nav-link">Ulasan</a>
                                        </li>
                                        <li class="{{ Request::is('galeri') ? 'active' : '' }}">
                                            <a href="/galeri" class="nav-link">Galeri</a>
                                        </li>

                                        @if(Auth::check() && Auth::user()->role==='admin')
                                            <li class="{{ Request::is('pengaturan') ? 'active' : '' }}">
                                                <a href="/pengaturan" class="nav-link">Pengaturan</a>
                                            </li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> 
                    <div class="header-right d-none d-lg-block">
                        <!-- <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt=""> (08) 728 256 266</a>
                        <a href="#" class="header-btn2">Make an Appointment</a> -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <a class="header-btn1" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="header-btn2" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <a class="header-btn1" href="#">{{ Auth::user()->name }}</a>
                            <a class="header-btn2" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        @endguest
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    
    @include('layouts.footer')
</body>
</html>
