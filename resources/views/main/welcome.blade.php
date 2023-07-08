<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
    
    <!-- Website Title -->
    <title>Sisol - Simaksi Online</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{asset('tivo/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('tivo/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('tivo/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('tivo/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('tivo/css/styles.css')}}" rel="stylesheet">
    @stack('styleW')


	<!-- Favicon  -->
    <link rel="icon" href="tivo/images/mountains.png">
</head>
<body data-spy="scroll" data-target=".fixed-top" style="background-color: #007C77">


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="/welcome"><img src="tivo/images/logo.png" alt="SisOl"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/">Beranda<span class="sr-only">(current)</span></a>
                    </li>

                    
                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" href="/#tentang3s" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang 3S</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://id.wikipedia.org/wiki/Gunung_Sumbing"><span class="item-text">Sumbing</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="https://id.wikipedia.org/wiki/Gunung_Sindoro"><span class="item-text">Sindoro</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                            <a class="dropdown-item" href="https://id.wikipedia.org/wiki/Gunung_Slamet"><span class="item-text">Slamet</span></a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#video">Video</a>
                    </li>
                    <!-- end of dropdown menu -->

                    
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#biayasimaksi">Biaya Simaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/#persyaratan">Persyaratan</a>
                    </li>

                    @guest
                        <span class="nav-item">
                            <a class="btn-outline-sm" href="/login">Masuk</a>
                        </span>
                    @else
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/pemesanan/create">Daftar Simaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="/pemesanan">Pemesanan</a>
                        </li>
                        <span class="nav-item">
                            <form  id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                                <button type="submit" class="btn-outline-sm" >Logout</button>
                            </form>
                        </span>
                    @endguest

                </ul>
               
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content1">
            <!-- didalam content bawah header -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-container">
                            <h1>SELAMAT DATANG <br> DI SISOL!!</h1>
                            <p class="p-large">Simaksi online yang gabikin khawatir <br> segera daftar untuk memulai pendakian</p>
                            <a class="btn-solid-lg page-scroll page-scroll" href="/pemesanan/create">Daftar Simaksi</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-12">
                            <div class="img-wrapper1">
                                <img class="img-fluid" src="tivo/images/hiddenwelcome.png" alt="alternative">
                            </div> <!-- end of img-wrapper -->
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
    <script src="{{asset('tivo/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('tivo/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('tivo/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('tivo/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('tivo/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('tivo/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('tivo/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('tivo/js/scripts.js')}}"></script> <!-- Custom scripts -->
    @stack('scriptW')
</body>
</html>