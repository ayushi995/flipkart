<?php 
	include '../config/config.php';
	$page = $_POST['page'];
	//echo($page);
	$limit = $_POST['limit'];
	// echo($limit);
	$cid = $_POST['cid'];
	// echo($cid);
	
	$offset = (($page - 1) * $limit); 
	
	//echo $page.'-------'.$limit;
	
	$getpsql2 = "select * from product_add where category_id = '".$cid."' limit ".$offset.", ".$limit."";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	
	$dataarr = array();
	
	while($row = mysqli_fetch_array($prodquery2)){
		 //array_push($dataarr, $row['name']);
		 
		 $html = '<div class="products_five">
					<a href="define.php?prolisid='.$row['product_add_id'].' ">
						<div class="prod_img_five">
							<img src="../admin/asset/profront/'.$row['pro_image'].'"   />
						</div>
					<div class="pro_text_five">
						<div class="selvia_five">Selvia</div>
						<div class=""><a href="#" class="pro_name_five">'.$row['product_name'].'</a></div>
						<a href="#" class="prices_a_five">
							<div class="price_five"><i class="fas fa-rupee-sign"></i>'.$row['net_price'].'</div>
							<div class="fake_price_five"><i class="fas fa-rupee-sign"></i>'. $row['price'].'</div>
							<div class="discount_five">'.$row['discount'].'%off</div>
						</a>
					</div>
					</a>		
				</div>';
				
				
		array_push($dataarr, $html);
	}
	
	
	echo json_encode($dataarr);
	
	
?>