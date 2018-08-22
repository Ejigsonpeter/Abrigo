               <?php
                 include 'connection.php';
                 if (isset($_Post['search'])){
                  $alcohol = mysqli_escape_string($con,$_Post['alcohol']);
                  $smoke = mysqli_escape_string($con,$_Post['smoke']);
                  $clean = mysqli_escape_string($con,$_Post['clean']);
                  $studious = mysqli_escape_string($con,$_Post['studious']);
                  $friends = mysqli_escape_string($con,$_Post['friends']);
                  $cook = mysqli_escape_string($con,$_Post['cook']);




                   $sql = "SELECT * FROM users where smoke = '$smoke'  and alcohol ='$alcohol' and cook = '$cook' and guest = '$friends' and clean = '$clean' and studious = '$studious' ";
                   $query = mysqli_query($con,$sql);
                   s1 = mysqli_num_rows($query);

                   if (num > 0 ){
                      while ($rw = mysqli_fetch_assoc($query)){

                      echo '  <div class="property-box-2 wow fadeInUp delay-03s" >
                        <div class="row">
                          <div class="col-lg-5 col-md-5 col-pad">
                              <a href="properties-details.php" class="property-img">
                                  <img src="'.$rw['passport'].'" width = "750px" height = "600px" alt="properties" class="img-fluid">

                                  
                              </a>
                          </div>
                          <div class="col-lg-7 col-md-7">
                              <div class="detail ">
                                  <h3 class="title">
                                      Fullname :'.$rw['fullname'].'
                                  </h3>
                                  <h5 class="location">
                                      <a href="properties-details.php">
                                          <i class="flaticon-location">Phonenumber :</i>'.$rw['phonenumber'].'
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





                    

                 }

                  ?>
