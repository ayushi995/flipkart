<?php 
include 'config/config.php';	
$sqlfull = "select * from  category ";
$queryfull = mysqli_query($conn,$sqlfull);
if(!isset($_GET['prolisid']) || $_GET['prolisid'] == null){
	$sqlprodlis = 'select * from product_add';
}
else{
	$proaddlisid = $_GET['prolisid'];
	$sqlprodlis = 'select * from product_add where product_add_id="'.$proaddlisid.'"';
}
$queryprodlis = mysqli_query($conn, $sqlprodlis);
$rowprodlis = mysqli_fetch_array($queryprodlis);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include "includes/css.php";
?>
</head>
<body>
<!---section-one-header--->
<?php
	include "includes/header.php";
 ?>
 <?php 
$userid = null;
if(isset($_SESSION['user_id'])){
	$userid = $_SESSION['user_id'];
}
?>
<!---section-deine-one--->
<section class="section-one_def">
	<div class="container_def">
		<div class="row">
			<div class="col-md-5">
				<div class="left-main-div_def">
					<div class="big-image_def">
						<img src="../admin/asset/profront/<?php echo $rowprodlis['pro_image'] ?>">
					</div>
					<div class="image-buttons_def">
						<ul>
							<li>
								<button>
								<i class="fas fa-shopping-cart"></i>
								add to cart
								</button>
							</li>
							 <li>
								<button id="buynow" class="buy-now_def">
								<i class="fas fa-store"></i>
									buy now
								</button>
							</li>
						<ul>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="right-main-div_def">
					<div class="right-main-menu_def">
						<div class="right-menu_def">
							<a href="#">Home</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Jewellery</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Artifical Jewellery</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Accessories</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Brooches</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Mahi Brooches</a>
							<i class="fas fa-chevron-right"></i>
						</div>
						<div class="right-menu_def">
							<a href="#">Mahi Combo</a>
						</div>
					</div>
					<div class="first-div-details_def">
						<h1><?php echo $rowprodlis['product_name'] ?><span><?php echo $rowprodlis['description'] ?></span></h1>
						<div class="rating-main-div_def">
							<div class="rating_def">
								<div class="green-rating_def">
									4
									<i class="fas fa-star"></i>
								</div>
							</div>
							<div class="second-rating_def">
								<span>182 Ratings & 14 Reviews</span>
							</div>
							<div class="rating-image_def">
								<img src="asset/rating-icon.png" />
							</div>
						</div>
						<div class="price-main-div_def">
							<div class="net-price_def">
								<i class="fas fa-rupee-sign"></i>
								<?php echo $rowprodlis['price'] ?>
							</div>
							<div class="price_def">
								<i class="fas fa-rupee-sign"></i>
								<?php echo $rowprodlis['net_price'] ?>
							</div>
							<div class="discount_def">
								<?php echo $rowprodlis['discount'] ?>% Off
							</div>
						</div>
						<div id="quanerror"></div>
						<div class="quantity_def">
							<select id="quantity" >
							  <option value="">Select Quantity</option>
								<?php
									$x = 1;
									while($x <= $rowprodlis['quantity']){
								?>
									<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
								<?php
									$x++;
								}
						?>
							</select>
						</div>
						<div id="addresserror"></div>
						<textarea id="address" style="width:200px;" placeholder="Address"></textarea>
						<div class="offers-main-div_def">
							<div class="offers-main-heading_def">Available Offers</div>
							<div class="offers_def">
								<li>
									<span class="offer-icon_def"><img src="asset/offer-icon.png"  width="18" height="18"/></span>
									<span class="offer-heading_def">Partner Offer</span>
									<span class="offer-text_def">Sign up for Flipkart Pay Later and get Flipkart Gift Card worth $100*<strong>Know More</strong></span>
								</li>
								<li>
									<span class="offer-icon_def"><img src="asset/offer-icon.png"  width="18" height="18"/></span>
									<span class="offer-heading_def">Bank Offer</span>
									<span class="offer-text_def">5% Cashback on Flipkart Axis Bank Card <strong> T&C </strong></span>
								</li>
							</div>
						</div>
						<div class="description_def">
							<div class="description-heading_def">Description</div>
							<div class="description-text_def">
								Add a pop of glamour and colour to your look with this eye-catching design of the Brooch combo. This combo of Brooch pin compliments a suit or traditional wear. This brooch lapel pin by mahi Jewelry is made by alloy for making it glossy and shiny. All products from Mahi are anti allergic
							</div>
						</div>
						<div id="loader">
							<img src="asset/loader.gif" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="order-succes">Your Order is Successfully
	<button type="button" class="btn btn-success" id="order-ok">Ok</button>
</div>
<!---section-six-fotter--->
<?php
	include "includes/footer.php";	
 ?>
<?php
	include "includes/js.php";
?>
<script>
	$(document).ready(function(){
	$("#quantity").change(function(){
		$("#quanerror").html("");
	});
	$("#address").change(function(){
		$("#addresserror").html("");
	});
		$("#buynow").click(function(){
			// $("#loader").hide();
			var prodid = '<?php echo $proaddlisid; ?>';
			 // console.log(prodid);
			var userid = '<?php echo $userid; ?>';
			 // console.log(userid);
			var quantity = $("#quantity").val();
			var address = $("#address").val();
			 // console.log(quantity);
			var price = "<?php echo $rowprodlis['price'] ?>";
			 // console.log(price);
			var name = "<?php echo $rowprodlis['product_name'] ?>";
			// console.log(name);
			if(userid == ''){
				window.location.href = 'login.php';
				return false;
			}
			else if(quantity == ""){
				$("#quanerror").html("Please Select Quantity");
				$("#quantity").css("border", "1px solid red");
				return false;
			}
			else if(address == ""){
				$("#addresserror").html("Please Select Quantity");
				$("#address").css("border", "1px solid red");
				return false;
			}
			$("#loader").show();
			$.ajax({
				url: 'ajax/buynow.php',
				type: 'POST',
				data: {prodid, userid, quantity, address, price, name},
				success: function(resp){
					console.log(resp);	
					if(resp == 1){
						$("#quantity").val('');
						$("#quantity").css("border", "1px solid #000");
						$("#address").val('');	
						$("#address").css("border", "1px solid #000");
						$("#loader").hide();
						$("#order-succes").css("display", "block");
						$("#order-ok").click(function(){
							$("#order-succes").css("display", "none");
						});
					} 
				}
			})
			
			
		})
	});
  
  
  
</script>
</body>
</html>
