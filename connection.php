<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $database = "abrigo_db";

  $con = mysqli_connect($host,$user,$pass);
  if (!$con){
    echo "cannot connect to mysqli";
  }
  else{
  //  echo "connection to host successfull";
  }
  mysqli_select_db($con,$database);

?>
