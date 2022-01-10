<?php 

	$con = mysqli_connect("localhost","skycctv","Sky@@1234","skycctv");
	// Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

?>