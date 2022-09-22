<?php 
	session_start();
	include '../config/config.php';
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$authsql = "select * from admin_user where email='".$email."' and passowrd = '".MD5($pass)."'";
	
	$query = mysqli_query($conn, $authsql);
	
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['token'] = $row['user_id']; 
		echo 1;
	} else {
		echo 0;
	}
?>