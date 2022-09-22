<?php 
include 'config/config.php';

$uid =  $_GET['uid'];
$oid =  $_GET['oid'];
$ooid = $oid;
echo $ooid;

// echo $uid.'---------'. $oid ;

$sql = "update buynow set isconfirm = 1 where order_id = '".$oid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 'Your Order is Successfully';
	} else {
		echo 0;
	}
?>