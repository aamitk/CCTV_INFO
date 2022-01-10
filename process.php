<?php
session_start();

$con = mysqli_connect("localhost","skycctv","Sky@@1234","skycctv");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();	
}

if (isset($_POST["submitEnquiry"]))  
{
    
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $services = htmlspecialchars(stripslashes(trim($_POST['services'])));
    $location = htmlspecialchars(stripslashes(trim($_POST['location'])));
    $description = htmlspecialchars(stripslashes(trim($_POST['description'])));
    $date = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO `enquiry` VALUES (0, '$name', '$email', '$phone', '$services', '$location', '$description', '$date')";
    
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['status'] = "You have successfully submited your query. Thank you !!";
		$_SESSION['status_code'] = "success";
        header("location:index.php"); 
    }
    else
    {
        $_SESSION['status'] = "Sorry due to technical issue your request has not processed !!";
		$_SESSION['status_code'] = "error";
        header("location:index.php"); 
    }
    
    
  }

?>