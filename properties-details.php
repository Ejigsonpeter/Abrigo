<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Find Accomodation</title>
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
                      <a class="nav-link "" href="room.php"   aria-haspopup="true" aria-expanded="false">
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
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Find Accomodation</h1>
        </div>
    </div>
    <div class="page-info">
        
    </div>
</div>

<br>
<!-- Sub Banner end -->
<div class="widget search-area d-none d-xl-block d-lg-block">
                       <h3 class="sidebar-title" align = "center">Advanced Search</h3></center>
                       
<div class="inline-search-area ml-auto mr-auto">
     <form method="POST" action = "properties-details.php" enctype="multipart/form-data">
                                <div class="row animated fadeInUp">
                                    <div class="col-xl-4 col-sm-4 col-6 search-col">
                                        
                                  <select class="selectpicker search-fields" name="roomtype">
                                   <option value  = "single room">House type</option>
                                  <option value  = "single room">single room</option>
                                  <option value = "self contain">self contain</option>
                                  <option value = "Flat">Flat</option>
                                  <option value = "Duplex">Duplex</option>
                                </select>
                                    
                                    </div>
                                    <div class="col-xl-3 col-sm-3 col-6 search-col middle-col-1">
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
                                    <div class="col-xl-3 col-sm-3 col-8 search-col middle-col-2">
                                      <select class="selectpicker search-fields" name="location">
                                    <option value = "Gidan Kwano">Location </option>
                                    <option value = "Gidan Kwano">Gidan Kwano </option>
                                    <option value = "Bosso">Bosso</option>
                                </select>
                                    </div>

                                    <div class="col-xl-2 col-sm-2 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block" name = "search">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                       </div>
<!-- Properties details page start -->
<div class="properties-details-page content-area-6">
    <div class="container">
        <div class="row">

          <?php
           include 'connection.php';
           if (isset($_POST['search'])){
             $location = mysqli_real_escape_string($con,$_POST['location']);
             $roomtype = mysqli_real_escape_string($con,$_POST['roomtype']);
             $bedrooms = mysqli_real_escape_string($con,$_POST['bedrooms']);

             $sql = "SELECT * FROM props WHERE campus = '$location ' AND type = '$roomtype' AND room = '$bedrooms'  ";
             $query = mysqli_query($con,$sql);
             if (mysqli_num_rows($query) > 0){

              while ($rw = mysqli_fetch_assoc($query)){

                echo '<div class="col-lg-8 col-md-12">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <div class="heading-properties">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>'.$rw['title'].'</h3>
                                        <p><i class="fa fa-map-marker"></i> '.$rw['address'].'</p>
                                    </div>
                                    <div class="p-r">
                                        <h3>$420,00</h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="'.$rw['photo1'].'" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="'.$rw['photo2'].'" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="'.$rw['photo3'].'" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="'.$rw['photo4'].'" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="'.$rw['photo1'].'" class="img-fluid" alt="slider-properties">
                            </div>

                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                    <img src="'.$rw['photo1'].'" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                    <img src="'.$rw['photo2'].'" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                    <img src="'.$rw['photo3'].'" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                    <img src="'.$rw['photo4'].'" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                    <img src="'.$rw['photo1'].'" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                        </ul>
                        <!-- main slider carousel items -->

                        <!-- Heading properties start -->
                        <div class="heading-properties">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>'.$rw['title'].'</h3>
                                        <p><i class="fa fa-map-marker"></i> '.$rw['address'].'</p>
                                    </div>
                                    <div class="pull-right">
                                        <h3><span class="text-right">'.$rw['price'].'</span></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Heading properties end -->
                    </div>

                    <!-- Property meta start -->
                    <div class="property-meta mb-40">
                        <ul>
                            <li>
                                <i class="flaticon-furniture"></i>
                                <p>'.$rw['room'].' Bedroom(s)</p>
                            </li>
                            <li>
                                <i class="flaticon-holidays"></i>
                                <p>'.$rw['bathroom'].' Bathroom(s)</p>
                            </li>
                            <li>
                                <i class="flaticon-square"></i>
                                <p>Agent Name : '.$rw['fullname'].'</p>
                            </li>
                            <li>
                                <i class="flaticon-technology-1"></i>
                                <p> '.$rw['phoneno'].'</p>
                            </li>
                        </ul>
                    </div>
                </div>';
              }
            }
              else {
              echo  '<div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="pull-rigt">
                            <h3>Error 404</h3>
                            <p><i class="fa fa-map-marker"></i> No Match Found</p>
                        </div></div></div>
                        ';
              }

           }

            ?>
            
        </div>

        <!-- Similar Properties start -->

            </div>
        </div>
        <!-- Similar Properties end -->
    </div>
</div>
<!-- Properties details page end -->

<!-- Partners strat -->

<!-- Partners end -->

<!-- Footer start -->
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

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='fa fa-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='fa fa-envelope'></i>  info@themevessel.com</li> " +
                    "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>

</body>


</html>
