<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-transparent">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.html">
                <img src="img/logos/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link " href="index.html"   aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="index.html"   aria-haspopup="true" aria-expanded="false">
                            About
                        </a>


                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="index.html"   aria-haspopup="true" aria-expanded="false">
                            contact us
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            sign up
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-item"><a class="dropdown-item" href="#">Landlord</a>
                            </li>
                            <li class="dropdown-item"><a class="dropdown-item " href="#">User</a>
                            </ul>
                        </li>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-item"><a class="dropdown-item" href="#">Landlord</a>
                            </li>
                            <li class="dropdown-item"><a class="dropdown-item " href="#">User</a>
                            </ul>
                        </li>
                    </li>
                    <li class="nav-item">
                        <a href="#full-page-search" class="nav-link link-color"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="img/banner/banner-1.jpg" alt="banner-1">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s">Find Accomodation and Room mate</h3>
                            <p data-animation="animated fadeInUp delay-10s">
                                Welcome to Abrigo, The Leading website for finding Accomodation
                            </p>

                            <div class="inline-search-area ml-auto mr-auto">
                                <div class="row animated fadeInUp">
                                    <div class="col-xl-4 col-sm-4 col-6 search-col">
                                        <select class="selectpicker search-fields" name="property-status">
                                      <option>I am looking for a ......</option>
                                      <option>Single Room</option>
                                      <option>One room self contain</option>
                                      <option>two room self contain</option>
                                    </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="property-status">
                                            <option>Property Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-8 search-col middle-col-2">
                                      <select class="selectpicker search-fields" name="property-status">
                                          <option>Gidan Kwano</option>
                                          <option>Bosso</option>
                                      </select>
                                    </div>
                                    <div class="col-xl-2 col-sm-2 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="img/banner/banner-2.jpg" alt="banner-2">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s">Find Accomodation and Room mate</h3>
                            <p data-animation="animated fadeInUp delay-10s">
                              Welcome to Abrigo, The Leading website for finding Accomodation.
                            </p>

                            <div class="inline-search-area ml-auto mr-auto">
                                <div class="row animated fadeInUp">
                                    <div class="col-xl-4 col-sm-4 col-6 search-col">
                                        <select class="selectpicker search-fields" name="property-status">
                                      <option>I am looking for a ......</option>
                                      <option>Single Room</option>
                                      <option>One room self contain</option>
                                      <option>two room self contain</option>
                                    </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="property-status">
                                            <option>Property Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-8 search-col middle-col-2">
                                      <select class="selectpicker search-fields" name="property-status">
                                          <option>Gidan Kwano</option>
                                          <option>Bosso</option>
                                      </select>
                                    </div>
                                    <div class="col-xl-2 col-sm-2 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="img/banner/banner-1.jpg" alt="banner-1">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s">Find Accomodation and Room mate</h3>
                            <p data-animation="animated fadeInUp delay-10s">
                                Welcome to Abrigo, The Leading website for finding Accomodation.
                            </p>

                            <div class="inline-search-area ml-auto mr-auto">
                                <div class="row animated fadeInUp">
                                    <div class="col-xl-4 col-sm-4 col-6 search-col">
                                        <select class="selectpicker search-fields" name="property-status">
                                      <option>I am looking for a ......</option>
                                      <option>Single Room</option>
                                      <option>One room self contain</option>
                                      <option>two room self contain</option>
                                    </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="property-status">
                                            <option>Property Status</option>
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-8 search-col middle-col-2">
                                      <select class="selectpicker search-fields" name="property-status">
                                          <option>Gidan Kwano</option>
                                          <option>Bosso</option>
                                      </select>
                                    </div>
                                    <div class="col-xl-2 col-sm-2 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- banner end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">

            <p>Apartments currently Available  </p>
        </div>

        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

             <!-- property 1 start -->
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="#" class="property-img">

                                <div class="price-ratings-box">
                                    <p class="price">
                                        Price N250,000
                                    </p>

                                </div>

                                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/properties/properties-21.jpg" alt="properties">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/properties/properties-22.jpg" alt="properties">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="#">Miafat Apartment</a>
                            </h1>
                            <div class="location">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Opposite Shaban Gidan Kwano Campus
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-furniture"></i> 2 Bedrooms
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i> 2 Bathrooms
                                </li>
                                <li>
                                    <i class="flaticon-square"></i> 1 Parlour
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i> 2 Wardrobes
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
 <!-- property 1 start -->
 <!-- property 1 start -->
    <div class="slick-slide-item">
        <div class="property-box">
            <div class="property-thumbnail">
                <a href="#" class="property-img">

                    <div class="price-ratings-box">
                        <p class="price">
                            Price N120,000
                        </p>

                    </div>

                    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/properties/properties-11.jpg" alt="properties">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/properties/properties-12.jpg" alt="properties">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="detail">
                <h1 class="title">
                    <a href="#">District -7</a>
                </h1>
                <div class="location">
                    <a href="#">
                        <i class="fa fa-map-marker"></i>Opposite Barracks Gidan Kwano Off Campus
                    </a>
                </div>
                <ul class="facilities-list clearfix">
                    <li>
                        <i class="flaticon-furniture"></i> 1 Bedroom
                    </li>
                    <li>
                        <i class="flaticon-holidays"></i> 1 Bathroom
                    </li>
                    <li>
                        <i class="flaticon-square"></i> 0 Parlour
                    </li>
                    <li>
                        <i class="flaticon-vehicle"></i> 1 Wardrobe
                    </li>
                </ul>
            </div>

        </div>
    </div>
<!-- property 1 start -->

<!-- property 1 start -->
   <div class="slick-slide-item">
       <div class="property-box">
           <div class="property-thumbnail">
               <a href="#" class="property-img">

                   <div class="price-ratings-box">
                       <p class="price">
                           Price N50,000
                       </p>

                   </div>

                   <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                       <ol class="carousel-indicators">
                           <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                           <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                       </ol>
                       <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                           </div>
                           <div class="carousel-item">
                               <img class="d-block w-100" src="img/properties/properties-31.jpg" alt="properties">
                           </div>
                           <div class="carousel-item">
                               <img class="d-block w-100" src="img/properties/properties-32.jpg" alt="properties">
                           </div>
                       </div>
                   </div>
               </a>
           </div>
           <div class="detail">
               <h1 class="title">
                   <a href="#">A.M.T Lodge</a>
               </h1>
               <div class="location">
                   <a href="#">
                       <i class="fa fa-map-marker"></i>Opposite White House Gidan Kwano Campus
                   </a>
               </div>
               <ul class="facilities-list clearfix">
                   <li>
                       <i class="flaticon-furniture"></i> 1 Bedroom
                   </li>
                   <li>
                       <i class="flaticon-holidays"></i> shared Bathroom
                   </li>
                   <li>
                       <i class="flaticon-square"></i> 0 Parlour
                   </li>
                   <li>
                       <i class="flaticon-vehicle"></i> 0 Wardrobes
                   </li>
               </ul>
           </div>

       </div>
   </div>
<!-- property 1 start -->
<!-- property 1 start -->
<div class="slick-slide-item">
<div class="property-box">
<div class="property-thumbnail">
   <a href="#" class="property-img">

       <div class="price-ratings-box">
           <p class="price">
               Price N30,000
           </p>

       </div>

       <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img class="d-block w-100" src="img/properties/properties-41.jpg" alt="properties">
               </div>
               <div class="carousel-item">
                   <img class="d-block w-100" src="img/properties/properties-42.jpg" alt="properties">
               </div>
               <div class="carousel-item">
                   <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
               </div>
           </div>
       </div>
   </a>
</div>
<div class="detail">
   <h1 class="title">
       <a href="#">Abuja Lodge</a>
   </h1>
   <div class="location">
       <a href="#">
           <i class="fa fa-map-marker"></i>Behind Health Care Centre Gidan Kwano Off Campus
       </a>
   </div>
   <ul class="facilities-list clearfix">
       <li>
           <i class="flaticon-furniture"></i> 1 Bedrooms
       </li>
       <li>
           <i class="flaticon-holidays"></i> shared Bathroom
       </li>
       <li>
           <i class="flaticon-square"></i> 0 Parlour
       </li>
       <li>
           <i class="flaticon-vehicle"></i> 0 Wardrobe
       </li>
   </ul>
</div>

</div>
</div>
<!-- property 1 start -->


            </div>
            <div class="slick-prev slick-arrow-buton">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="slick-next slick-arrow-buton">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Counters strat -->
<div class="counters overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInLeft delay-04s">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-tag"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">967</h1>
                        <p>Listings For Sale</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInLeft delay-04s">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-business"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">1276</h1>
                        <p>Listings For Rent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInRight delay-04s">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">396</h1>
                        <p>Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow fadeInRight delay-04s">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people-1"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">177</h1>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Counters end -->

<br>








<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>

                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            Fax: +0477 85X6 552
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">

            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">


            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>enter your email to subscribe for more updates on Apartments</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block button-theme">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">Ejigson Soft © 2017 <a href="#"></a> </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://storage.googleapis.com/themevessel-items/real-house/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/wow.min.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

</body>


</html>
