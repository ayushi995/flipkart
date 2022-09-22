<?php
	include '../config/config.php';

	$file = $_FILES['cateupdateimg'];
	$uid = $_POST['f_uid'];
	$name = $_POST['f_name'];
	$photo = $_POST['f_cate_img'];
	
	move_uploaded_file($file['tmp_name'], '../asset/category/'.$photo);
	
	$sql = "update category set category_name = '".$name."', category_image = '".$photo."' where category_id = '".$uid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

