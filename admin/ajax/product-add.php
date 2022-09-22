<?php
	include '../config/config.php';


	$file1 = $_POST['file1'];
	$file2 = $_POST['file2'];
	$file3 = $_POST['file3'];
	$name = $_POST['u_name'];
	$desc = $_POST['u_desc'];
	$price = $_POST['u_price'];
	$disc = $_POST['u_disc'];
	$netprice = $_POST['u_netprice'];
	$quantity = $_POST['u_quantity'];
	$cate = $_POST['u_cate'];
	//print_r($photo);
	
	$date = date('y-m-d-H-i-s');
	
	//echo $date;
	
	$sql = "insert into product_add (product_add_id, product_name, pro_image, pro2_image, pro3_image,  description, quantity , price, discount, net_price, category_id, status, created_date) values ('', '".$name."', '".$file1."', '".$file2."','".$file3."', '".$desc."',
	'".$quantity."' , '".$price."', '".$disc."','".$netprice."', '".$cate."',  1, '".$date."')";
	
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
	
	
?>

