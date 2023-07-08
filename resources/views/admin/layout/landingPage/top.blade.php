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
    <title>Watch Me!</title>

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
                        <li class="menu-active"><a href="index.php">Beranda</a></li>
                        <li><a href="form_pesanan.php">Pesan</a></li>
                        <li><a href="#unique">Produk</a></li>
                        <li class="menu-has-children"><a href="">Admin</a>
                            <ul>
                                <li><a href="../watchme/backend/database.php">database</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>
