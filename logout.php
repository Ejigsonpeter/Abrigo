<?php

include 'connection.php';
session_start();
if (isset($_POST['logout1'])){
	unset($_SESSION['logid']);
	$_SESSION['logid']=NULL;
	session_destroy();
	header('location:login.php');
}

?>


