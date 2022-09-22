<?php 
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include "includes/css.php";
?>
</head>
<body>
<section class="section-main-bc">
<!---section-one-header--->
<?php
	include "includes/header.php";
 ?>

<?php	
 $userid = null;
 if(isset($_SESSION['user_id'])){
	 $userid = $_SESSION['user_id'];
 }

$userordersql = "select PO.*, p.product_name, p.pro_image from buynow PO JOIN product_add p ON p.product_add_id = PO.product_add_id where PO.user_id = '".$userid."'";
// print_r($userordersql);
$queryprodlis = mysqli_query($conn, $userordersql);
// print_r($queryprodlis);
?> 
 
<!---user-order-section--->
<section class="user-order-main-section">
	<div class="min-div_usor">
		<div class="left-main-div_usor">
			
		</div>
		<div class="right-main-div_usor">
			<?php
					while($row = mysqli_fetch_array($queryprodlis)){
						// print_r($row)
			?>
			<div class="right-div_usor">
				<div class="pro-image_usor">
					<img  src="../admin/asset/profront/<?php echo $row['pro_image']; ?>" />
				</div>
				<div class="pro-name_usor">
					<span><?php echo $row['product_name']; ?></span>
				</div>
				<div class="pro-price_usor">
					<span>
					<i class="fas fa-rupee-sign"></i><?php echo $row['total_price']; ?>
					</span>
				</div>
				<div class="pro-date_usor">
					<span>
					<i class="fas fa-rupee-sign"></i><?php echo $row['created_date']; ?>
					</span>
				</div>
			</div>
			<?php 
				}
			?>
		</div>
		
	</div>
</section>
 
<!---section-six-fotter--->
<?php
	include "includes/footer.php";	
 ?>
<?php
	include "includes/js.php";
?>
</body>
</html>
