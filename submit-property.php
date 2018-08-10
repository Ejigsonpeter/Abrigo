<!DOCTYPE html>
<html lang="zxx">
<?php
include 'connection.php';
session_start();
if (isset($_SESSION['lanlords'])){

}
else{
  echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Oh snap!</strong> You must login first!!
  </div>';
  header('location:lanlogin.php');
}

 ?>
<?php
include 'connection.php';

if (isset($_POST['submit'])){
  $title = mysqli_real_escape_string($con,$_POST['title']);
  $type = mysqli_real_escape_string($con,$_POST['type']);
  $price = mysqli_real_escape_string($con,$_POST['price']);
  $room = mysqli_real_escape_string($con,$_POST['room']);
  $bathroom = mysqli_real_escape_string($con,$_POST['bathroom']);
  $address = mysqli_real_escape_string($con,$_POST['address']);
  $campus = mysqli_real_escape_string($con,$_POST['campus']);
  $fname = mysqli_real_escape_string($con,$_POST['fname']);
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $phoneno = mysqli_real_escape_string($con,$_POST['phone']);

  $filepath = 'image/';

 //file 1
   copy($_FILES['photo1']['tmp_name'], "".$filepath."".$_FILES['photo1']['name']);
  $pic1 = ("".$filepath."".$_FILES['photo1']['name']);
  //file 2
  copy($_FILES['photo2']['tmp_name'], "".$filepath."".$_FILES['photo2']['name']);
  $pic2 = ("".$filepath."".$_FILES['photo2']['name']);
  //file 3
  copy($_FILES['photo3']['tmp_name'], "".$filepath."".$_FILES['photo3']['name']);
  $pic3 = ("".$filepath."".$_FILES['photo3']['name']);
  //file 4
  copy($_FILES['photo4']['tmp_name'], "".$filepath."".$_FILES['photo4']['name']);
  $pic4 = ("".$filepath."".$_FILES['photo4']['name']);




  $sql = "INSERT INTO props (title,type,price,room,bathroom,address,campus,fullname,email,phoneno,photo1,photo2,photo3,photo4)
                  VALUES('$title',
                          '$type',
                          '$price',
                          '$room',
                          '$bathroom',
                          '$address',
                          '$campus',
                          '$fname',
                          '$email',
                          '$phoneno',
                          '$pic1',
                          '$pic2',
                          '$pic3',
                          '$pic4'
                        )";
  $query = mysqli_query($con,$sql);
  if ($query){
    echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Well done!</strong> Apartment registered successfully !!!!
    </div>';
  }
  else {
    echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Oh snap!</strong> Registration failed!!
    </div>';

  }


}

?>




<head>
    <title>Property</title>
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

            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">

                    <li>
                        <a href="#" class="rss"><i class=""></i></a>
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
          <a class="navbar-brand logo" href="index.html">
              <img src="img/logos/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                      <a class="nav-link " href="profile.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-home"> &nbsp;  My Profile</i>
                      </a>

                  </li>
                  <li class="nav-item ">
                      <a class="nav-link " href="submit-property.php"   aria-haspopup="true" aria-expanded="false">
                         <i class="flaticon-cross"> &nbsp;  Add Property</i>
                      </a>

                  </li>


                  <li class="nav-item ">
                      <a class="nav-link " href="index.html"   aria-haspopup="true" aria-expanded="false">
                         <i class="fa fa-eye"> &nbsp; View Properties</i>
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
            <h1>Submit Property</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="index.html">Index</a></li>
                            <li><span>/</span>Submit Property</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-info">
                        <ul>
                            <li><i class="fa fa-phone"></i> +1-8X0-666-8X88</li>
                            <li><a href="contact.html" class="btn btn-md button-theme">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Submit Property start -->
<div class="submit-property content-area">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="submit-address">
                    <form method="post" action = "submit-property.php" enctype="multipart/form-data">
                        <h3 class="heading-2">Basic Information</h3>
                        <div class="search-contents-sidebar mb-30">
                            <div class="form-group">
                                <label>Property Title</label>
                                <input type="text" class="input-text" name="title" >
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                        <select class="selectpicker search-fields" name="type">
                                            <option value  = "single room">single room</option>
                                            <option value = "self contain">self contain</option>
                                            <option value = "Flat">Flat</option>
                                            <option value = "Duplex">Duplex</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="input-text" name="price" placeholder="NAIRA">
                                    </div>
                            </div>
                            <div class="row">

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Rooms</label>
                                        <select class="selectpicker search-fields" name="room">
                                            <option value = "1">1</option>
                                            <option value = "2">2</option>
                                            <option value = "3">3</option>
                                            <option value = "4">4</option>
                                            <option value = "5">5</option>
                                            <option value = "6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Bathroom</label>
                                        <select class="selectpicker search-fields" name="bathroom">
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
                        </div>

                        <h3 class="heading-2">Property Gallery</h3>
                        <div class="row mb-50">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Photo1</label>
                                    <input type="file" class="input-text" name="photo1"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>photo 2</label>
                                    <input type="file" class="input-text" name="photo2"  >
                                </div>
                            </div>
                        </div>
                        <div class="row mb-50">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Photo 3</label>
                                    <input type="file" class="input-text" name="photo3"  >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>photo 4 </label>
                                    <input type="file" class="input-text" name="photo4"  >
                                </div>
                            </div>
                        </div>

                        <h3 class="heading-2">Location</h3>
                        <div class="row mb-50">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="input-text" name="address"  placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Campus</label>
                                    <select class="selectpicker search-fields" name="campus">
                                        <option>Choose Campus</option>
                                        <option>Gidan Kwano</option>
                                        <option>Bosso</option>

                                    </select>
                                </div>
                            </div>


                        </div>

                        <h3 class="heading-2">Contact Details</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="input-text" name="fname" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone (optional)</label>
                                    <input type="text" class="input-text" name="phone"  placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <button name = "submit" class="btn btn-md button-theme mb-30">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Submit Property end -->

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
