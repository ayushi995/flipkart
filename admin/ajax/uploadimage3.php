<?php 

	$file3 = $_FILES['T_photo3'];
	$filename3 = $_POST['T_photoname3'];
	
	if($filename3 != null) {
		unlink('../asset/proback/'.$filename3);
	}
	
	$temp = $file3['tmp_name'];
	//khali image k lie 
	
	
	$date = date('y-m-d-H-i-s');
	$filename3 = $date."photo.jpg";
	move_uploaded_file($temp, '../asset/proback/'.$filename3);
	
	echo $filename3;
?>