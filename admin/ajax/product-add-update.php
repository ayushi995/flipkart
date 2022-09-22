<?php
	include '../config/config.php';
	
	$file1 = $_FILES['f_upimage1'];
	$file2 = $_FILES['f_upimage2'];
	$file3 = $_FILES['f_upimage3'];
	$uid = $_POST['f_uid'];
	$photo1 = $_POST['f_photo1'];
	$photo2 = $_POST['f_photo2'];
	$photo3 = $_POST['f_photo3'];
	$name = $_POST['f_name'];
	$desc = $_POST['f_desc'];
	$price = $_POST['f_price'];
	$disc = $_POST['f_disc'];
	$netprice = $_POST['f_netprice'];
	$cate = $_POST['f_cate'];
	$quantity = $_POST['f_quantity'];
	
	move_uploaded_file($file1['tmp_name'], '../asset/profront/'.$photo1);
	move_uploaded_file($file2['tmp_name'], '../asset/proside/'.$photo2);
	move_uploaded_file($file3['tmp_name'], '../asset/proback/'.$photo3);
	$sql = "update product_add set product_name = '".$name."',pro_image = '".$photo1."' , pro2_image = '".$photo2."', pro3_image = '".$photo3."' ,  description = '".$desc."', quantity = '".$quantity."' ,  price = '".$price."', discount = '".$disc."' , net_price = '".$netprice."', category_id = '".$cate."' where product_add_id = '".$uid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
?>

