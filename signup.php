


<!DOCTYPE html>
<html lang="zxx">

<?php
   include 'connection.php';
  if (isset($_POST['submit'])){
    $fullname =  mysqli_real_escape_string($con,$_POST['fullname']);
    $studentid = mysqli_real_escape_string($con,$_POST['studentid']);
    $level =  mysqli_real_escape_string($con,$_POST['level']);
    $department =  mysqli_real_escape_string($con,$_POST['department']);
    $faculty =  mysqli_real_escape_string($con,$_POST['faculty']);
    $gender =  mysqli_real_escape_string($con,$_POST['gender']);
    $password =  mysqli_real_escape_string($con,$_POST['password']);
    $phoneno = mysqli_real_escape_string($con,$_POST['phone']);
    $passport ="image / profiel.jpg";
    //check phonenumber
    if (strlen($phoneno) != 11){
      echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Oh snap!</strong> Invalid Phone Number
      </div>';
    }
    else {
       $sql = "SELECT * from student_id where studentid = '$studentid' ";
       $query = mysqli_query($con,$sql);
       $num = mysqli_num_rows($query);
        if ($num > 0) {
          $sql2 = "SELECT * from users where studentid = '$studentid' ";
          $query2 = mysqli_query($con,$sql2);
          $num2 = mysqli_num_rows($query2);
              if ($num2 > 0){
                echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Oh snap!</strong> Student Already Exist in Database
                </div>';
              }
              else {
                $sqlii = "INSERT INTO users (fullname,studentid,level,department,faculty,phonenumber,gender,password,passport)

                     VALUES('$fullname',
                           '$studentid',
                           '$level',
                           '$department',
                           '$faculty',
                           '$phoneno',
                          '$gender',
                          '$password',
                          '$passport'
                        )";




               $q = mysqli_query($con,$sqlii);
               if ($q){
                 echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Well done!</strong> Registeration successfully !!
                 </div>';
               }
               else{
                 echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <strong>Oh snap!</strong> Registeration Failed !!
                 </div>';



              }

        }}
        else {
          echo '<div class="alert alert-danger wow fadeInRight delay-03s"  role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Oh snap!</strong> Invalid Student ID
          </div>';
        }


    }

  }



 ?>
<head>
    <title>Register User</title>
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

<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- Logo-->
                    <a href="index.html">
                        <img src="img/logos/logo.png" class="cm-logo" alt="logo">
                    </a>
                    <!-- details -->
                    <div class="details">
                        <!-- Name -->
                        <h3>Create an account</h3>
                        <!-- Form start-->
                        <form action="signup.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Full Name"  required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="studentid" class="input-text" placeholder="Student ID" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="level" class="input-text" placeholder="Level" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="department" class="input-text" placeholder="Department" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="faculty" class="input-text" placeholder="Faculty"  required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="input-text" placeholder="phone number"  >
                            </div>

                            <div class="form-group">
                                <select  type = "select" name="gender" class="input-text" placeholder="Gender" required>
                                    <option value = "select">Select Gender</option>
                                    <option value = "Male">Male</option>
                                    <option value = "Female">Female</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" required>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" name = "submit" class="btn-md button-theme btn-block">Signup</button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                    <span>
                        Already a member? <a href="login.html">Login here</a>
                    </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

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
