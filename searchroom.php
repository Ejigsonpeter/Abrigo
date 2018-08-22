<?php
 include 'connection.php';
 if (isset($_POST['search'])){
   $location = mysqli_real_escape_string($con,$_POST['location']);
   $roomtype = mysqli_real_escape_string($con,$_POST['roomtype']);
   $bedrooms = mysqli_real_escape_string($con,$_POST['bedrooms']);
   $bathroom = mysqli_real_escape_string($con,$_POST['bathroom']);

   $sql = "SELECT * FROM props WHERE campus = '$location ' AND type = '$roomtype' AND room = '$bedrooms' AND bathroom = '$bathroom' ";
   $query = mysqli_query($con,$sql);

    while ($rw = mysqli_fetch_assoc($query)){
      echo '<div class="property-box-2 wow fadeInUp delay-03s" >
        <div class="row">
          <div class="col-lg-5 col-md-5 col-pad">
              <a href="properties-details.html" class="property-img">
                  <img src="img/properties/properties-list-1.jpg" alt="properties" class="img-fluid">
                  <div class="listing-badges">
                      <span class="featured">Featured</span>
                  </div>
                  <div class="price-ratings-box">
                      <p class="price">
                          $178,000
                      </p>
                      <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-7 col-md-7">
              <div class="detail ">
                  <h3 class="title">
                      <a href="properties-details.html"></a>
                  </h3>
                  <h5 class="location">
                      <a href="properties-details.html">
                          <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                      </a>
                  </h5>
                  <ul class="facilities-list clearfix">
                      <li>
                          <i class="flaticon-furniture"></i>
                          <span>3 Beds</span>
                      </li>
                      <li>
                          <i class="flaticon-holidays"></i>
                          <span>1 Baths</span>
                      </li>
                      <li>
                          <i class="flaticon-square"></i>
                          <span>4800 sq ft</span>
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
              <div class="footer">
                  <div class="pull-left days">
                      <p><i class="flaticon-time"></i> 5 Days ago</p>
                  </div>
                  <ul class="pull-right">
                      <li><a href="#"><i class="flaticon-favorite"></i></a></li>
                      <li><a href="#"><i class="flaticon-multimedia"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
      </div>';
    }

 }

  ?>
