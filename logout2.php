<?php

include 'connection.php';
if (isset($_POST['logout3'])){
	session_destroy();
	header('location:lanlogin.php');
}

?>