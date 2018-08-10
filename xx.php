<?php
include 'connection.php';
if (isset($_POST['submit1'])){
echo  $title = mysqli_real_escape_string($con,$_POST['title']);
echo   $type = mysqli_real_escape_string($con,$_POST['type']);
echo   $price = mysqli_real_escape_string($con,$_POST['price']);
echo   $room = mysqli_real_escape_string($con,$_POST['room']);
echo   $bathroom = mysqli_real_escape_string($con,$_POST['bathroom']);
echo   $address = mysqli_real_escape_string($con,$_POST['address']);
echo   $campus = mysqli_real_escape_string($con,$_POST['campus']);
echo   $fullname = mysqli_real_escape_string($con,$_POST['fullname']);
echo   $email = mysqli_real_escape_string($con,$_POST['email']);
echo   $phone = mysqli_real_escape_string($con,$_POST['phone']);
  $filepath = 'image/';
   //file 1
  copy($_FILES['photo1']['tmp_name'], "".$filepath."".$_FILES['photo1']['name']);
echo   $pic1 = ("".$filepath."".$_FILES['photo1']['name']);
  //file 2
  copy($_FILES['photo2']['tmp_name'], "".$filepath."".$_FILES['photo2']['name']);
echo   $pic2 = ("".$filepath."".$_FILES['photo2']['name']);
  //file 3
  copy($_FILES['photo3']['tmp_name'], "".$filepath."".$_FILES['photo3']['name']);
echo   $pic3 = ("".$filepath."".$_FILES['photo3']['name']);
  //file 4
  copy($_FILES['photo4']['tmp_name'], "".$filepath."".$_FILES['photo4']['name']);
echo   $pic4 = ("".$filepath."".$_FILES['photo4']['name']);

  $sqli = "INSERT INTO property (title,type,price,room,bathroom,photo1,photo2,photo3,photo4,address,campus,fullname,email,phoneno)
                  VALUES('$title',
                          '$type',
                          '$price',
                          '$room',
                          '$bathroom',
                          '$photo1',
                          '$photo2',
                          '$photo3',
                          '$photo4',
                          '$address',
                          '$campus',
                          '$fullname',
                          '$email',
                          '$phoneno'
                        )";
  $queries = mysqli_query($con,$sqli);
  if ($queries){
    echo '<div class="alert alert-success wow fadeInLeft delay-03s"  role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Well done!</strong> Registration successfull!!
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
