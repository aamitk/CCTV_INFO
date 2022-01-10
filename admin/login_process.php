<?php  include("include/config.php"); session_start();
	
	if(! empty($_POST)){

		extract($_POST);
		$_SESSION['error'] = array();

		
		if(empty($email) || empty($password)){
			$_SESSION['error'][] = "Plase Enter Email Id Or Password";
			header("location:login.php");
		}
		else{
			$password = $_POST['password'];
			$q = "SELECT * FROM `admin` WHERE email='$email' and password='$password'";
			//echo $q; die();
			$res = mysqli_query($con,$q);

			$row = mysqli_fetch_assoc($res);
			//print_r($row); die();
			
			if(! empty($row)){
				$q = "SELECT * FROM `admin` WHERE email='$email' and password='$password' and status= '1'";
				$res = mysqli_query($con,$q);
				$row = mysqli_fetch_assoc($res);
				//print_r($row); die();
				if($row != '' AND $row['id'] != ''){
					$id = $row['id'];
					$t = date('Y-m-d H:i:s');
					$sql = "UPDATE `admin` SET last_login = '$t' WHERE id = '$id'";
					//echo $sql; die();
					$p=  mysqli_query($con,$sql);
					//print_r($p); die();
					$_SESSION['admin']['first_name'] = $row['first_name'];
					$_SESSION['admin']['user_name'] = $row['user_name'];
					$_SESSION['admin']['email'] = $row['email'];
					$_SESSION['admin']['status'] = $row['status'];
					$_SESSION['admin']['id'] = $row['r_id'];
					$_SESSION['admin']['last_login'] = $row['last_login'];
					$_SESSION['admin']['status'] = true;
					$_SESSION['success'][] = "Wel-Come You Have Successfull Log In..!";
					header("location:index.php");
				}else if($row == 0){					
					$_SESSION['error'][] = "User Disabled, Plz Contact Administrator..!!	";
					header("location:login.php");					
				}
			}
			else{
				$_SESSION['error'][] = "Wrong username and Password..!!";
				header("location:login.php");
			}
		}

	}
	else{
		header("location:login");
	}


?>