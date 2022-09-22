<?php
	include "../config/config.php";
	
	$cate = $_POST['f_name'];
	$cateimg = $_FILES['f_cateimg'];
	$date = date('y-m-d-H-i-s');
	
	
	$fileType1 = $cateimg['type'];
	$fileType1 = substr($fileType1, 6);
	$filename1 = 'cate'.$date.'.'.$fileType1;
	move_uploaded_file($cateimg['tmp_name'], '../asset/category/'.$filename1);

	if($cate != "" ){
		$sql = "insert into category (category_id, category_name, category_image,  status, created_date) values ('', '".$cate."', '".$filename1."', 1, '".$date."')";
		$query = mysqli_query($conn, $sql);
		if($query){
			echo 1;
		}
		else{
			echo 2;
		}
	}
	else{
		echo 0;
	}

?>