<?php
	include "../config/config.php";
	
	$name = $_POST['u_name'];
	$email = $_POST['u_email'];
	$password = $_POST['u_password'];
	$type = "admin";
	
	
	if($name != "" && $email != "" && $password != ""){
		$sql = "insert into admin_user (user_id, type,  name, email, passowrd, status, created_date) values('', '".$type."',  '".$name."', '".$email."', '".MD5($password)."', 1, '')";
		
		$query = mysqli_query($conn, $sql);
		
		if($query){
			echo 1;
		} else {
			echo 2;
		}
	}
		else {
			echo 0;
		}
 ?>