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

}
?>
