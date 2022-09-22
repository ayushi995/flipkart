<?php
	include '../config/config.php';

	$id = $_POST['id'];
	$status = $_POST['status'];
	
	if($status == 1){
		$status = 0;
	} else {
		$status = 1;
	}
	
	$sql = "update product_add set status = '".$status."' where product_add_id = '".$id."'";
	
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

