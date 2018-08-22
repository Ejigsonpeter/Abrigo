<?php

include 'connection.php';
if (isset($_POST['logout1'])){
	session_destroy();
	header('location:login.php');
}

?>