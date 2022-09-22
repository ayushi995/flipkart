<?php include 'config/config.php'; 
	
	$page = 1;
	/*if(isset($_GET['page'])){
		$page = $_GET['page'];
	}*/
	$limit = 8;
	$offset = (($page - 1) * $limit);    
	
		
		$catid = $_GET['id'];
		$sqlid = "select * from product_add where category_id = '".$catid."' limit ".$offset.", ".$limit."";
		$resp = mysqli_query($conn, $sqlid);
		$proresp = mysqli_fetch_array($resp);
		 // print_r($resp);
		  // print_r($proresp);
		
		$cate = "select * from category where category_id='".$catid."'";
		$cateque = mysqli_query($conn, $cate);
		$catefetch = mysqli_fetch_array($cateque);
		
		$getpsql4 = "select * from product_add where category_id = '".$catid."'";
		$prodquery5 = mysqli_query($conn, $getpsql4);
		$pagination = ceil($prodquery5->num_rows / $limit);
		// echo $prodquery3;
		
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

<!---section-five--->
<h1><?php echo $catefetch['category_name']; ?></h1>
<section class="section-five">
	<!--<h1 class="pro_h1_five">Recently Products</h1>-->
	<div class="main-div_five" id="loaddata">
	<?php
		while($row = mysqli_fetch_array($resp)){
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


<div class="loadmore-div">
				<ul class="page-ul">
					<?php 
						for($i=1; $i<=$pagination; $i++){
							?>
								<li><a href="list.php?id=<?php echo $catid; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
						}
					
					?>
					
				</ul>
				<input type="hidden" value="2" id="page" />
				<button id="loadmore" class="btn btn-primary">Load More</button>
			</div>
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
$(document).ready(function(){
	$("#loadmore").click(function(){
		var page = parseInt($("#page").val());
		var limit = 8;
		var cid = '<?php echo $catid; ?>';
		// console.log(cid);
		
			$.ajax({
				url: 'ajax/loadmore.php',
				type: 'POST',
				data:{page, limit, cid},
				success: function(resp){
				//loaddata
					var respdata = JSON.parse(resp);
					for(var i=0; i<respdata.length;i++){
					var htmldata = $.parseHTML(respdata[i]);
					$("#loaddata").append(htmldata);
					}
					$("#page").val(page+1);	
					}
				})
	});
})
</script>
</body>
</html>
