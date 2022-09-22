<?php 
	session_start();
	include '../config/config.php';
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$type = "end-user";

	$authsql = "select * from admin_user where email = '".$email."' && passowrd = '".MD5($pass)."' && type = '".$type."' ";
	$query = mysqli_query($conn, $authsql);
	
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['type'] = $row['type'];
		$_SESSION['name'] = $row['name'];
		echo 1;
	} else {
		echo 0;
	}
?>