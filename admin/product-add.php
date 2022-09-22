<?php include 'config/config.php'; 
	$uid = null;
	$name = null;
	$desc = null;
	$price = null;
	$disc = null;
	$netprice = null;
	$cate = null;
	$quantity = null;
	$photo1 = null;
	$photo2 = null;
	$photo3 = null;
	if(isset($_GET['id'])){
		$uid = $_GET['id'];
		$sqlid = "select * from product_add where product_add_id='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['product_name'];
		$desc = $result['description'];
		$price = $result['price'];
		$disc = $result['discount'];
		$netprice = $result['net_price'];
		$cate = $result['category_id'];
		$quantity = $result['quantity'];
		$photo1 = $result['pro_image'];
		$photo2 = $result['pro2_image'];
		$photo3 = $result['pro3_image'];
	}
	
	$sqlcate = 'select * from category';
	$querycate = mysqli_query($conn, $sqlcate);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php
	include "includes/css.php";
 ?>  
</head>

<body class="g-sidenav-show   bg-gray-100">
  
<!-- aside-section -->
<?php
	include "includes/aside.php";
 ?>
 
<!-- header-section -->
<?php
	include "includes/header.php";
 ?>

 <!---Product-Add-form-section-start---->
<section class="section-one_a">
	<div class="main-div_a">
		<div class="form-main">
		<div id="msg"></div>
			<div class="form-group">
			<label for="email">Product Name</label>
				<input type="text" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Product Name" id="name">
			</div>
			<div class="form-group">
			<label for="email">Description</label>
				<input id="desc" type="text" value="<?php echo $desc; ?>" class="form-control" placeholder="Enter Description"/>				
			</div>
			<div class="row">
				<div class="col">
					<label for="email">Price</label>
					<input type="number" value="<?php echo $price; ?>" class="form-control"  placeholder="Enter Price" id="price">
				</div>
				<div class="col">
					<label for="email">Discount</label>
					<input type="number" value="<?php echo $disc; ?>" class="form-control" placeholder="Enter Discount" id="disc">
				</div>
				<div class="col">
					<label for="email">Net Price</label>
					<input type="number" value="<?php echo $netprice; ?>" class="form-control" placeholder="Enter Net Price" id="netprice">
				</div>
			</div>
			<div class="row" style="margin-top:20px">
				<div class="col">
					<label for="email">Product Front Image</label>
					<?php 
						if($uid == null){
					?>
					<input type="file" class="form-control"  id="pimage1" accept="image.png/,image.jpeg" />
					<input type="hidden" class="form-control" id="hideimage1" placeholder="Image" name="" />
					<div id="uploadprev1" class="uploadimageclass"><img src="asset/profront/default.jpg" width="150px" height="150px" id="image1"/></div>
					<?php
						} else {
					?>
					<div class="product_img">
						<input type="file" class="form-control"  id="updateimage1" accept="image.png/,image.jpeg" />
						<div class="" id="updatefront_btn"><img src="asset/profront/<?php echo $photo1; ?>" /></div>
					</div>
					<?php
						}
					?>
				</div>
				<div class="col">
					<label for="email">Product Side Image</label>
					<?php 
						if($uid == null){
					?>
					<input type="file" class="form-control" value="" id="pimage2" placeholder="Upload Image" accept="image.png/,image.jpeg" />
					<input type="hidden" class="form-control" id="hideimage2" placeholder="Image" name="" />
					<div id="uploadprev2" class="uploadimageclass"><img src="asset/profront/default.jpg" width="150px" height="150px" id="image2" /></div>
					<?php
						} else {
					?>
					<div class="product_img">
						<input type="file" class="form-control"  id="updateimage2" accept="image.png/,image.jpeg" />
						<div class="" id="updateside_btn"><img src="asset/proside/<?php echo $photo2; ?>" /></div>
					</div>
					<?php
						}
					?>
				</div>
			</div>	
				<div class="row" style="margin-top:20px">
				<div class="col">
					<label for="email">Product Back Image</label>
					<?php 
						if($uid == null){
					?>
					<input type="file" class="form-control" value="" id="pimage3" placeholder="Upload Image" accept="image.png/,image.jpeg" />
					<input type="hidden" class="form-control" id="hideimage3" placeholder="Image" name="" />
					<div id="uploadprev3" class="uploadimageclass"><img src="asset/profront/default.jpg" width="150px" height="150px" id="image3" /></div>
					<?php
						} else {
					?>
					<div class="product_img">
						<input type="file" class="form-control"  id="updateimage3" accept="image.png/,image.jpeg" />
						<div class="" id="updateback_btn"><img src="asset/proback/<?php echo $photo3; ?>" /></div>
					</div>
					<?php
						}
					?>
				</div>
				<div class="col">
					<label for="email">Quantity</label>
					<input type="number" placeholder="Enter The Quantity" value="<?php echo $quantity; ?>" class="form-control" id="quantity" />
				</div>
				<div class="col">
					<label for="email">Category</label>
					<select class="form-control" id="cate">
						<option>Select Category</option>
						<?php
							while($row = mysqli_fetch_array($querycate)){
						?>
							<option <?php echo
							$row['category_id'] == $cate ? 'selected' : '';  ?> value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name']; ?></option>
						<?php
							}
						?>
					</select>
				</div>
			</div>
			<?php 
		if($uid == null){
			?>
			<button type="submit" id="submit" class="btn_a">Submit</button>
			<?php
		} else {
			?>
			<button type="submit" id="update" class="btn_a">update</button>
			<?php
		}
	  ?>
		</div>
	</div>
</section> 
 

  <!-- JS Files   -->
<?php
	include "includes/js.php";
 ?>  
<script>
	$(document).ready(function(){
		
		$("#uploadprev1").click(function(){
			$("#pimage1").click();
		});
		$("#uploadprev2").click(function(){
			$("#pimage2").click();
		});
		$("#uploadprev3").click(function(){
			$("#pimage3").click();
		});
		
		$("#pimage1").change(function(){
			var file = $(this)[0].files[0];
			var filename = $("#hideimage1").val();
			var fd = new FormData();  
			fd.append("T_photo",file);
			fd.append("T_photoname",filename);
			
			$.ajax({
				 url:"ajax/uploadimage1.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res){
					$("#hideimage1").val(res);
					$("#image1").attr("src", "");
					$("#image1").attr("src", "asset/profront/"+res);
				 }
		   });
		});
		
		$("#pimage2").change(function(){
			var file2 = $(this)[0].files[0];
			var filename2 = $("#hideimage2").val();
			var fd = new FormData();  
			fd.append("T_photo2",file2);
			fd.append("T_photoname2",filename2);
			
			$.ajax({
				 url:"ajax/uploadimage2.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res2){
					$("#hideimage2").val(res2);
					$("#image2").attr("src", "");
					$("#image2").attr("src", "asset/proside/"+res2);
				 }
		   });
		});
		
		$("#pimage3").change(function(){
			var file3 = $(this)[0].files[0];
			var filename3 = $("#hideimage3").val();
			var fd = new FormData();  
			fd.append("T_photo3",file3);
			fd.append("T_photoname3",filename3);
			
			$.ajax({
				 url:"ajax/uploadimage3.php",
				 type:"POST",
				 data:fd,
				 processData:false,
				 contentType:false,
				 success:function(res3){
					$("#hideimage3").val(res3);
					$("#image3").attr("src", "");
					$("#image3").attr("src", "asset/proback/"+res3);
				 }
		   });
		});
		
		$("#updatefront_btn").click(function(){
			$("#updateimage1").click();
		});
		
		$("#updateside_btn").click(function(){
			$("#updateimage2").click();
		});
		
		$("#updateback_btn").click(function(){
			$("#updateimage3").click();
		});
		
	$("#submit").click(function(){
		var name = $("#name").val();
		var desc = $("#desc").val();
		var price = $("#price").val();
		var disc = $("#disc").val();
		var netprice = $("#netprice").val();
		var quantity = $("#quantity").val();
		var cate = $("#cate").val();
		var imagename1 = $("#hideimage1").val();
		var imagename2 = $("#hideimage2").val();
		var imagename3 = $("#hideimage3").val();
		
		var fd = new FormData();
		
		fd.append('file1', imagename1);
		fd.append('file2', imagename2);
		fd.append('file3', imagename3);
		fd.append('u_name', name);
		fd.append('u_desc', desc);
		fd.append('u_price', price);
		fd.append('u_disc', disc);
		fd.append('u_netprice', netprice);
		fd.append('u_quantity', quantity);
		fd.append('u_cate', cate);
		

		
		$.ajax({
				url:"ajax/product-add.php",
				type:"POST",
				data:fd,
				processData:false,
				contentType:false,
				success:function(resp){
					if(resp == 1){
						location.reload();
						
					}
				}
		})
	});
	
	$("#update").click(function(){
			var uid = '<?php echo $uid; ?>';
			var photo1 = "<?php echo $photo1; ?>";
			var photo2 = "<?php echo $photo2; ?>";
			var photo3 = "<?php echo $photo3; ?>";
			var name = $("#name").val();
			var desc = $("#desc").val();
			var price = $("#price").val();
			var disc = $("#disc").val();
			var netprice = $("#netprice").val();
			var cate = $("#cate").val();
			var quantity = $("#quantity").val();
			var upimage1 = $('#updateimage1')[0].files[0];
			var upimage2 = $('#updateimage2')[0].files[0];
			var upimage3 = $('#updateimage3')[0].files[0];
			
			let fData = new FormData();
			fData.append('f_uid', uid);
			fData.append('f_photo1', photo1);
			fData.append('f_photo2', photo2);
			fData.append('f_photo3', photo3);
			fData.append('f_name', name);
			fData.append('f_desc', desc);
			fData.append('f_price', price);
			fData.append('f_disc', disc);
			fData.append('f_netprice', netprice);
			fData.append('f_cate', cate);
			fData.append('f_quantity', quantity);
			fData.append('f_upimage1', upimage1);
			fData.append('f_upimage2', upimage2);
			fData.append('f_upimage3', upimage3);
			
			$.ajax({
				url:"ajax/product-add-update.php",
				type:"POST",
				data: fData,
				processData: false,
				contentType: false,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'product-add-list.php';
					}
				}
			})
		});
}) 
</script>
  </body>
</html>