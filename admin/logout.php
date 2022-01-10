<?php 
	
	session_start();
	session_unset();   
	$_SESSION['success'][] = "You Have Successfull Log out..!";
	header("location:login.php");


?>