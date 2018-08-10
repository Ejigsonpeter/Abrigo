<!DOCTYPE html>
<html lang="zxx">
<?php
include 'connection.php';
session_start();
if (isset($_SESSION['lanlords'])){
  $id = $_SESSION['lanlords'];
  //echo $id;
  $sql =  "SELECT * FROM  lanlords WHERE phoneno = '$id' ";
  $query = mysqli_query($con,$sql);
  $rw = mysqli_fetch_assoc($query);
  $fullname = $rw['fullname'];
  $phoneno = $rw['phoneno'];
  $photo = $rw['passport'];


}
else {
  header("location:login.php");
}



?>

<head>
    <title>My Properties</title>
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

</header>
<!-- Top header end -->

<!-- Main header start -->
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
            <h1>My Properties</h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <ul>
                            <li><a href="index.html">Index</a></li>
                            <li><span>/</span>My Properties</li>
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

<!-- My bookmarks start -->
<div class="my-bookmarks content-area">
    <div class="container">
        <div class="row">
             <div class="col-lg-4 col-md-12 col-sm-12">
                 <!-- Avatar start -->
                 <div class="edit-profile-photo">
                   <div class="edit-profile-photo">
                       <img src = '<?php  echo $photo;?>' alt="profile-photo" class="img-fluid">


                   </div>
                 </div>
                 <!-- Avatar end -->
                 <!-- My account box start -->
                 <<div class="my-account-box">
                     <ul>
                         <li>
                             <a href="my-profile.html" class="active">
                                 <i class="flaticon-people"></i>My Profile
                             </a>
                         </li>

                         <li>
                             <a href="submit-property.php" class="">
                                 <i class="flaticon-cross"></i>Add property
                             </a>
                         </li>

                         <li>
                             <a href="submit-property.html">
                                 <i class="fa fa-eye"></i>View Property
                             </a>
                         </li>
                         <li>
                             <a href="change-password.html">
                                 <i class="flaticon-lock"></i>Change Password
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 <i class="flaticon-exit"></i>Log Out
                             </a>
                         </li>
                     </ul>
                 </div>
                 <!-- My account box end -->
            </div>

             <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- Heading -->
                <h3 class="heading-2">Favorited Properties</h3>
                 <div class="my-properties">
                   <?php
                   include 'connection.php';
                   if (isset($_SESSION['lanlords'])){
                     $id = $_SESSION['lanlords'];
                     //echo $id;
                     $sql =  "SELECT * FROM  props WHERE phoneno = '$id' ";
                     $query = mysqli_query($con,$sql);

                     echo '<table class="table brd-none">
                         <thead>
                         <tr>
                             <th>PROPERTY</th>
                             <th></th>
                             <th>PRICE</th>
                             <th>LOCATION</th>
                             <th>ACTIONS</th>
                         </tr>
                         </thead>
                         <tbody> ';

                     while ($rw = mysqli_fetch_assoc($query)) {
                           echo '<tr>
                               <td class="image">
                                   <a href="properties-details.html"><img a src= "'.$rw['photo1'].'" class="img-fluid"></a>
                               </td>
                               <td>
                                   <div class="inner">
                                       <a href="properties-details.html"></a>
                                       <figure><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> '.$rw['address'].'</figure>
                                       <div class="tag price">'.$rw['type'].'</div>
                                   </div>
                               </td>
                               <td>'.$rw['price'].'</td>
                               <td>'.$rw['campus'].'</td>
                               <td class="actions">
                                   <a href="#" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                   <a href="#"><i class="delete fa fa-trash-o"></i></a>
                               </td>
                           </tr>';

                     }
                     echo '</tbody>
                   </table>'  ;
                   }

                   ?>

                 </div>
            </div>
        </div>
    </div>
</div>
<!-- My bookmarks end -->

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
