<!DOCTYPE html>
<html lang="eng">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kang Jam</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="{{ asset('landingPage/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset ('landingPage/css/main.css')}}">
</head>

<body>

    <header style="background-color: rgba(3, 9, 36, 0.5);" id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="{{ asset('landingPage/img/logokangjam.png')}}" width="180rem" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="{{ url ('/')}}">Beranda</a></li>
                        <li><a href="{{ url('jamku/pesanan')}}">Pesan</a></li>

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li class="nav-item ">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>

                        <li>
                            <a style="height: 20px;" href="{{ url('/produk')}}" class="genric-btn primary circle arrow">Dashboard<span class="lnr lnr-arrow-right"></span></a>
                        </li>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                        @endguest


                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
            <div>

            </div>
        </div>
    </header>