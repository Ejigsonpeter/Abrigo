<!DOCTYPE  html>
<html lang="zxx">

<?php
include 'connection.php';
session_start();
if (isset($_SESSION['login'])){

}
else{
  header('location:login.php');
}

 ?>

<head>
    <title>view Accomodation</title>
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

    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/php5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Top header start -->
<!-- Top header start -->
<header class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">

                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="#" class=""><i class=""></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
  <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand logo" href="my-profile.php">
              <img src="img/logos/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                      <a class="nav-link " href="my-profile.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-home"> &nbsp;  My Profile</i>
                      </a>

                  </li>
                  <li class="nav-item ">
                      <a class="nav-link " href="properties-details.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-search"> &nbsp;  Search for Accomodation </i>
                      </a>


                  </li>
                  <li class="nav-item ">
                      <a class="nav-link " href="room.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-search"> &nbsp; Search for Roommate</i>
                      </a>

                  </li>
                  <li class="nav-item ">
                      <a class="nav-link " href="properties-list.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-eye"> &nbsp; View Accomodation</i>
                      </a>

                  </li>



              </ul>
          </div>
      </nav>
  </div>
</header>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>View All Accomodation</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                            <div class="sorting-options">
                                <span>Available Properties:</span>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- Option bar end -->

                <!-- Property box 2 start -->

                <?php
                 include 'connection.php';
                 if (isset($_SESSION['login'])){


                   $sql = "SELECT * FROM props ";
                   $query = mysqli_query($con,$sql);

                    while ($rw = mysqli_fetch_assoc($query)){

                      echo '  <div class="property-box-2 wow fadeInUp delay-03s" >
                        <div class="row">
                          <div class="col-lg-5 col-md-5 col-pad">
                              <a href="properties-details.php" class="property-img">
                                  <img src="'.$rw['photo1'].'" width = "750px" height = "600px" alt="properties" class="img-fluid">

                                  <div class="price-ratings-box">
                                      <p class="price">
                                          '.$rw['price'].'
                                      </p>

                                  </div>
                              </a>
                          </div>
                          <div class="col-lg-7 col-md-7">
                              <div class="detail ">
                                  <h3 class="title">
                                      '.$rw['title'].'
                                  </h3>
                                  <h5 class="location">
                                      <a href="properties-details.php">
                                          <i class="flaticon-location"></i>'.$rw['address'].'
                                      </a>
                                  </h5>
                                  <ul class="facilities-list clearfix">
                                      <li>
                                          <i class="flaticon-furniture"></i>
                                          <span>'.$rw['room'].'</span>
                                      </li>
                                      <li>
                                          <i class="flaticon-holidays"></i>
                                          <span>'.$rw['bathroom'].'</span>
                                      </li>

                                      <li>
                                          <i class="flaticon-vehicle"></i>
                                          <span>1 Garage</span>
                                      </li>
                                      <li>
                                          <i class="flaticon-monitor"></i>
                                          <span>1 TV</span>
                                      </li>
                                      <li>
                                          <i class="flaticon-window"></i>
                                          <span>3 Balcony</span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      </div>';
                    }

                 }

                  ?>



                <!-- properties end -->

                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Search contents sidebar start -->
                    <div class="sidebar widget">
                        <h3 class="sidebar-title">Find your House</h3>
                        <form method="POST" action = "properties-details.php" enctype="multipart/form-data">

                            <div class="form-group">
                              <label> Location</label>
                                <select class="selectpicker search-fields" name="location">
                                    <option value = "Gidan Kwano">Gidan Kwano </option>
                                    <option value = "Bosso">Bosso</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="roomtype">
                                  <option value  = "single room">single room</option>
                                  <option value = "self contain">self contain</option>
                                  <option value = "Flat">Flat</option>
                                  <option value = "Duplex">Duplex</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option value = "1">1</option>
                                            <option value = "2">2</option>
                                            <option value = "3">3</option>
                                            <option value = "4">4</option>
                                            <option value = "5">5</option>
                                            <option value = "6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option value = "1">1</option>
                                            <option value = "2">2</option>
                                            <option value = "3">3</option>
                                            <option value = "4">4</option>
                                            <option value = "5">5</option>
                                            <option value = "6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button" name = "search">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container footer-inner">


        <div class="row">
            <div class="col-xl-12">
                <p class="copy">© Ejigson</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://storage.googleapis.com/themevessel-items/real-house/index.php#">
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

<!-- Mirrored from storage.googleapis.com/themevessel-items/real-house/properties-list-rightside.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jul 2018 11:20:57 GMT -->
</php>
