<?php 
	session_start();
	
	if(!isset($_SESSION['token']) && $_SESSION['token'] == null){
		header("Location: login.php");
	}
	


	include 'config/config.php';
	$product = "select * from admin_user";
	
	$queryrun = mysqli_query($conn, $product);
	?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
	include "includes/css.php";
 ?>  
</head>

<body class="g-sidenav-show   bg-gray-100">
  
<!-- aside-section -->
<?php
	include "includes/aside.php";
 ?>
 
<!-- header-section -->
<?php
	include "includes/header.php";
 ?>

 <!---my-section-start---->
<div style="margin-left:300px; margin-right:20px; height:700px;">
	<img src="asset/doremon.jpeg" style="width:100%; height:100%" />
</div>
 

  <!-- JS Files   -->
<?php
	include "includes/js.php";
 ?>  
  </body>
</html>