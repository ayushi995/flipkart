
<?php 
	include 'config/config.php';
	$sqlfull = "select * from  category ";
	$queryfull = mysqli_query($conn,$sqlfull);
	
	$sqlprolaptop = "select * from  product_add  where category_id = 5 LIMIT 5";
	$queryprolaptop = mysqli_query($conn,$sqlprolaptop);
	$sqlprofurniture = "select * from  product_add  where category_id = 6 LIMIT 5";
	$queryprofurniture = mysqli_query($conn,$sqlprofurniture);
	
	$feature_sql = 'select * from product_add where status = 0';
	$feature_query = mysqli_query($conn,$feature_sql);
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
<!---section-three--->
<section class="section-five">
		<div id="slider" class="owl-carousel owl-theme">
			<div class="item">
				<div class="box-design_three">
					<div class="box-img_three"><img src="asset/img1_three.jpg" /></div>
				</div>
			</div>
			<div class="item">
				<div class="box-design_three">
					<div class="box-img_three"><img src="asset/img2_three.jpg" /></div>
				</div>
			</div>
			<div class="item">
				<div class="box-design_three">
					<div class="box-img_three"><img src="asset/img3_three.jpg" /></div>
				</div>
			</div>
			<div class="item">
				<div class="box-design_three">
					<div class="box-img_three"><img src="asset/img4_three.jpg" /></div>
				</div>
			</div>
			<div class="item">
				<div class="box-design_three">
					<div class="box-img_three"><img src="asset/img5_three.jpg" /></div>
				</div>
			</div>
		</div>
</section>

<!---section-four--->
	
<section class="section-four">
	<div class="main-div_four">
		<a href="#">
			<img src="asset/img_four.jpg" />
		</a>
	</div>
</section>

<!---section-five--->
<section class="section-five">
	<!--<h1 class="pro_h1_five">Recently Products</h1>-->
	<div class="product_name_heading">Trending Products</div>
		<div class="main-div_five">
	<?php
		while($row = mysqli_fetch_array($feature_query)){
	?>
		<div class="products_five">
			<a href="define.php?prolisid=<?php echo $row['product_add_id'] ?> ">
				<div class="prod_img_five">
					<img src="<?php echo '../admin/asset/profront/'.$row['pro_image']; ?>"  />
				</div>
			<div class="pro_text_five">
				<div class="selvia_five">Selvia</div>
				<div class=""><a href="#" class="pro_name_five"><?php echo $row['product_name'] ?></a></div>
				<a href="#" class="prices_a_five">
					<div class="price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['net_price'] ?></div>
					<div class="fake_price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['price'] ?></div>
					<div class="discount_five"><?php echo $row['discount'] ?>%off</div>
				</a>
			</div>
			</a>		
		</div>
		<?php 
		}
		?>
	
		
	</div>
	
	
	<div class="product_name_heading">Laptops</div>
	<div class="main-div_five">
	<?php
		while($row = mysqli_fetch_array($queryprolaptop)){
	?>
		<div class="products_five">
			<a href="define.php?prolisid=<?php echo $row['product_add_id'] ?> ">
				<div class="prod_img_five">
					<img src="<?php echo '../admin/asset/profront/'.$row['pro_image']; ?>"  />
				</div>
			<div class="pro_text_five">
				<div class="selvia_five">Selvia</div>
				<div class=""><a href="#" class="pro_name_five"><?php echo $row['product_name'] ?></a></div>
				<a href="#" class="prices_a_five">
					<div class="price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['net_price'] ?></div>
					<div class="fake_price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['price'] ?></div>
					<div class="discount_five"><?php echo $row['discount'] ?>%off</div>
				</a>
			</div>
			</a>		
		</div>
		<?php 
		}
		?>
	
		
	</div>
	
	
	<div class="product_name_heading">Furniture</div>
	<div class="main-div_five">
	<?php
		while($row = mysqli_fetch_array($queryprofurniture)){
	?>
		<div class="products_five">
			<a href="define.php?prolisid=<?php echo $row['product_add_id'] ?> ">
				<div class="prod_img_five">
					<img src="<?php echo '../admin/asset/profront/'.$row['pro_image']; ?>"  />
				</div>
			<div class="pro_text_five">
				<div class="selvia_five">Selvia</div>
				<div class=""><a href="#" class="pro_name_five"><?php echo $row['product_name'] ?></a></div>
				<a href="#" class="prices_a_five">
					<div class="price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['net_price'] ?></div>
					<div class="fake_price_five"><i class="fas fa-rupee-sign"></i><?php echo $row['price'] ?></div>
					<div class="discount_five"><?php echo $row['discount'] ?>%off</div>
				</a>
			</div>
			</a>		
		</div>
		<?php 
		}
		?>
	
		
	</div>

</section>

<!---section-six-fotter--->
<?php
	include "includes/footer.php";	
 ?>
<?php
	include "includes/js.php";
?>
<script>	
$("#slider").owlCarousel({
	autoplay:true,
	loop:true,
    nav:true,
	dots:false,
	mouseDrag:false,
	navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
	});
		
</script>
</body>
</html>
