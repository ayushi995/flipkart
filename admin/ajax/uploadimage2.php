<?php 

	$file2 = $_FILES['T_photo2'];
	$filename2 = $_POST['T_photoname2'];
	
	if($filename2 != null) {
		unlink('../asset/proside/'.$filename2);
	}
	
	$temp = $file2['tmp_name'];
	//khali image k lie 
	
	
	$date = date('y-m-d-H-i-s');
	$filename2 = $date."photo.jpg";
	move_uploaded_file($temp, '../asset/proside/'.$filename2);
	
	echo $filename2;
?>