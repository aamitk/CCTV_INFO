<?php
session_start();

$con = mysqli_connect("localhost","skycctv","Sky@@1234","skycctv");
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();	
}

if (isset($_POST["enquiry"]))  
{
    
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['comment'])));
    $date = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO `contact` VALUES (0, '$name', '$email', '$phone', '$subject', '$message', '$date')";
    
    $query = mysqli_query($con, $sql);

    if($query)
    {
        $_SESSION['status'] = "You have successfully submited your query. Thank you !!";
		$_SESSION['status_code'] = "success";
        header("location:contact.php"); 
    }
    else
    {
        $_SESSION['status'] = "Sorry due to technical issue your request has not processed !!";
		$_SESSION['status_code'] = "error";
        header("location:contact.php"); 
    }
    
    
  }

?>