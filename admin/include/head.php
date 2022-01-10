<?php session_start(); 

  if(! isset($_SESSION['admin']['status'])){
       header("location:login.php");
  }

?>

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!-- Tell the browser to be responsive to screen width -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <!-- Custom CSS -->
 <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
 <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
 <link href="dist/css/style.min.css" rel="stylesheet">
 <!-- Custom CSS -->
 <link href="dist/css/style.min.css" rel="stylesheet">
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/ckeditor.js"></script>
