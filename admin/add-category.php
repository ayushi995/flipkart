<?php include 'config/config.php'; 
	$uid = null;
	$name = null;
	$cate_img = null;
	if(isset($_GET['id'])){
		$uid = $_GET['id'];
		$sqlid = "select * from category where category_id='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['category_name'];
		$cate_img = $result['category_image'];
	}
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
			<div class="form-group">
			<div id="error"></div>
			<label for="email">Category Name</label>
				<input type="text" value="<?php echo $name; ?>" class="form-control" placeholder="Enter Category Name" id="name" />
				<label for="email">Category Image</label>
					<?php 
						if($uid == null){
					?>
					<input type="file" class="form-control"  id="cateimg"  />
					<div id="cateimg_btn"><img src="asset/category/default.jpg" width="150px" height="150px" /></div>
					<?php
						} else {
					?>
					<div class="product_img">
						<input type="file" class="form-control"  id="cateupdateimg" />
						<div class="" id="cateupdateimg_btn"><img src="asset/category/<?php echo $cate_img; ?>" /></div>
					</div>
					<?php
						}
					?>
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
		
	$("#cateimg_btn").click(function(){
		$("#cateimg").click();
	});
		
	$("#cateupdateimg_btn").click(function(){
		$("#cateupdateimg").click();
	});	
		
		$("#submit").click(function(){
			var name = $("#name").val();
			var cateimg = $('#cateimg')[0].files[0];
			
			if(name == ""){
				$("#error").html("Please Category Name");
				return false;
			}
			
			var fd = new FormData();
		
			fd.append('f_name', name);	
			fd.append('f_cateimg', cateimg);
			
			$.ajax({
					type: "POST",
					url: 'ajax/add-category.php',
					data:fd,
					processData:false,
					contentType:false,
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		});
		
		$("#update").click(function(){
			var uid = '<?php echo $uid; ?>';
			var cate_img = "<?php echo $cate_img; ?>";
			var name = $("#name").val();
			var cateupdateimg = $('#cateupdateimg')[0].files[0];
			console.log(cateupdateimg);
			
			var fd = new FormData();
		
			fd.append('f_uid', uid);
			fd.append('f_cate_img', cate_img);
			fd.append('f_name', name);
			fd.append('cateupdateimg', cateupdateimg);
		
			$.ajax({
				url:"ajax/category-update.php",
				type:"POST",
				data: fd,
				processData: false,
				contentType: false,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'category-list.php';
					}
				}
			})
		});
	});
	</script>
  </body>
</html>