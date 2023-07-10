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

    <style type="text/css">
        @media print {
            .form-section {
                display: inline !important
            }

            .form-pagebreak {
                display: none !important
            }

            .form-section-closed {
                height: auto !important
            }

            .page-section {
                position: initial !important
            }
        }
    </style>
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.43241&themeRevisionID=5eb3b4ae85bd2e1e2966db96" />
    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.43241" />
    <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.43241" />
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/stylebuilder/donationBox.css?v=3.3.43241">

    <style type="text/css" id="form-designer-style">
        /* Injected CSS Code */
        /*PREFERENCES STYLE*/
        .form-all {
            font-family: Inter, sans-serif;
        }

        .form-label.form-label-auto {

            display: block;
            float: none;
            text-align: left;
            width: 100%;

        }

        .form-line {
            margin-top: 12px 36px 12px 36px px;
            margin-bottom: 12px 36px 12px 36px px;
            padding-top: 0;
            padding-bottom: 0;
        }

        .form-all {
            max-width: 752px;
            width: 100%;
        }

        .form-label.form-label-left,
        .form-label.form-label-right,
        .form-label.form-label-left.form-label-auto,
        .form-label.form-label-right.form-label-auto {
            width: 230px;
        }

        .form-all {
            font-size: 16px
        }

        .supernova .form-all,
        .form-all {
            background-color: #fff;
        }

        .form-all {
            color: #2C3345;
        }

        .form-header-group .form-header {
            color: #2C3345;
        }

        .form-header-group .form-subHeader {
            color: #2C3345;
        }

        .form-label-top,
        .form-label-left,
        .form-label-right,
        .form-html,
        .form-checkbox-item label,
        .form-radio-item label,
        span.FITB .qb-checkbox-label,
        span.FITB .qb-radiobox-label,
        span.FITB .form-radio label,
        span.FITB .form-checkbox label,
        [data-blotid][data-type=checkbox] [data-labelid],
        [data-blotid][data-type=radiobox] [data-labelid],
        span.FITB-inptCont[data-type=checkbox] label,
        span.FITB-inptCont[data-type=radiobox] label {
            color: #2C3345;
        }

        .form-sub-label {
            color: #464d5f;
        }

        .supernova {
            background-color: #ecedf3;
        }

        .supernova body {
            background: transparent;
        }

        .form-textbox,
        .form-textarea,
        .form-dropdown,
        .form-radio-other-input,
        .form-checkbox-other-input,
        .form-captcha input,
        .form-spinner input {
            background-color: #fff;
        }

        .supernova {
            background-image: none;
        }

        #stage {
            background-image: none;
        }

        ;

        .form-all {
            background-image: none;
        }

        .form-all {
            position: relative;
        }

        .form-all:before {
            content: "";
            background-image: url("https://www.jotform.com/uploads/guest_22d8c543ea739375/form_files/logokangjam.64ab7afd212d42.39323499.png");
            display: inline-block;
            height: 29.78813559322034px;
            position: absolute;
            background-size: 190px 29px;
            background-repeat: no-repeat;
            width: 100%;
        }

        .form-all {
            margin-top: 49px;
        }

        .form-all:before {
            top: -39px;
            left: 0;
            background-position: top left;
        }

        /*PREFERENCES STYLE*/
        /*__INSPECT_SEPERATOR__*/
        /* Injected CSS Code */
    </style>

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

                        <!-- selain customer bisa masuk ke dalam dashboard -->
                        @if (Auth::user()->role != 'customer')
                        <li>
                            <a style="height: 20px;" href="{{ url('/produk')}}" class="genric-btn primary circle arrow">Dashboard<span class="lnr lnr-arrow-right"></span></a>
                        </li>
                        @endif

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