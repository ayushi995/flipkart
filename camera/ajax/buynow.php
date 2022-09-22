<?php 
	include '../config/config.php';
	
	$prodid = $_POST['prodid'];
	 // print_r($prodid);
	$userid = $_POST['userid'];
	 // print_r($userid);
	$quantity = $_POST['quantity'];
	 // print_r($quantity);
	$address = $_POST['address'];
	 // print_r($address);
	$price = $_POST['price'];
	 // print_r($price);
	$name = $_POST['name'];
	  // echo($name);
	
	$totalamount = $price * $quantity;
	  // print_r($totalamount);
	$date = date('y-m-d-H-i-s');
	
	$sql = "Insert into buynow (order_id, user_id, product_add_id, quantity, price, total_price, address, isconfirm, status, created_date) values('', ".$userid.", ".$prodid.", ".$quantity.", ".$price.", ".$totalamount.", '".$address."',0, 1, '".$date."')";  
	$result = mysqli_query($conn, $sql);
	$last_id = mysqli_insert_id($conn);
	// $rand1 = rand(99,999);
	// $rand2 = rand(10,1000);
	// $last_id = $rand1.$last_id.$rand2;
	// print_r($last_id);
	
	if($result){
			$to = "reelsmast9953@gmail.com";
			$subject = "Simple Email Test via PHP";
			$from = "reelsmast9953@gmail.com";
			
			// To send HTML mail, the Content-type header must be set
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			// Create email headers
			$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			// Compose a simple HTML email message
			$message  = '<html><body>';
			$message .= '<div style="width:600px; border:1px solid #000; text-align:center;">
						<div style="background-color:#2874f0; text-align:center; padding:15px 0">
						<h2 style="margin:0; color:#fff;">Flipkart</h2>
						<div style="font-size:13px; color:#fff; font-style:italic; margin-top:-3px">
							Explore
							<span style="color:#ffe500; margin-right:2px; font-weight:600;">Plus</span>
							</div>
						</div>
						<h1 style="color:#2874f0; font-size:25px; text-align:center; box-shadow:0px 1px 5px 0px #c5bdbd; margin:0; padding:14px">Thank You For Your Order</h1>
						<div style="text-align:center;"><a href="http://localhost/flipkart/camera/confirmation.php?uid='.$userid.' &oid='.$last_id.'" style="background-color:#2874f0;color:#fff; padding:10px 10px; font-size:18px; text-decoration:none">Confirmation</a></div>
							<p style="font-size:13px; padding:0px 10px; font-weight:600;">Heres a summary of your purchase. When we ship the item, we will send an update with details</p>
							<div style="border-top:1px solid #e3dada; border-bottom:1px solid #e3dada; padding:5px 5px; font-size:13px; color:#504444">
								<div style="float:left">Order Id<span style="margin-left:7px; color:red">276498437</span></div>
								<div style="float:right">Order Date<span style="color:#000; font-weight:600; padding-left:7px">11 Dec. 2017</span></div>
								<div style="clear:both"></div>
							</div>
							<table style="width:100%; margin-top:15px; border-collapse:collapse; border:1px solid #000">
								<tr style="background-color:#ebe8e8">
									<th style="text-align:left; padding:5px">Product</th>
									<th style="text-align:left; padding:5px">Qty</th>
									<th style="text-align:left; padding:5px">Price</th>
									<th style="text-align:left; padding:5px">Total</th>
								<tr>
								<tr>
									<td style="text-align:left; padding:5px">'.$name.'</td>
									<td style="text-align:left; padding:5px">'.$quantity.'</td>
									<td style="text-align:left; padding:5px">'.$price.'</td>
									<td style="text-align:left; padding:5px">'.$totalamount.'</td>
								</tr>
							</table></div>';	
			
			$message .= '</body></html>';
			if (mail($to, $subject, $message, $headers)) {
				echo 1;
			} else {
				echo 2;
			}
	}else{
		echo 0;
	}
?>