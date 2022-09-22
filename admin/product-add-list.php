<?php 
	include 'config/config.php'; 
	$product_list = "select * from product_add";
	
	$querylis = mysqli_query($conn, $product_list);
	
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

<!---table-list-start---->
<section class="section_one_tl">
	<div class="main-div_tl">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Product-Id</th>
					<th>Product-Name</th>
					<th>Product Image</th>
					<th>Description</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Discount</th>
					<th>Net-Price</th>
					<th>Category</th>
					<th>Status</th>
					<th>Button</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
	
		<?php
			while($row = mysqli_fetch_array($querylis)){
				?>
					<tr>
						<td><?php echo $row['product_add_id']; ?></td>
						<td><?php echo $row['product_name']; ?></td>
						<td>   
							<img  src="<?php echo 'asset/profront/'.$row['pro_image']; ?>" style="width:60px; height:60px; border-radius:60px">
							<img  src="<?php echo 'asset/proside/'.$row['pro2_image']; ?>" style="width:60px; height:60px; border-radius:60px">
							<img  src="<?php echo 'asset/proback/'.$row['pro3_image']; ?>" style="width:60px; height:60px; border-radius:60px">
						</td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['quantity']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['discount']; ?></td>
						<td><?php echo $row['net_price']; ?></td>
						<td><?php echo $row['category_id']; ?></td>
						<td>
							<?php 
								if($row['status'] == 1){
									?>
									<span class="badge badge-success" style="color:green">Success</span>
									<?php
								} else {
									?>
									<span class="badge badge-danger" style="color:red">Failed</span>
									<?php
								}
							?>
						</td>
						<td>
							<button class="btn btn-warning" onclick="statusChangefunc(<?php echo $row['product_add_id']; ?>, <?php echo $row['status']; ?>)">Change</button>
						</td>
					<td><a onclick="deleterecord(<?php echo $row['product_add_id'] ?>)" href="javascript:void(0)">Delete</a></td>
					<td class="edit"><a href="product-add.php?id=<?php echo $row["product_add_id"] ?>">Edit</a></td>
					</tr>
				<?php
			}
		?>
      
	  
    </tbody>
  </table>
	</div>
</section>
 

  <!-- JS Files   -->
<?php
	include "includes/js.php";
 ?>  
 
<script>
function deleterecord(id){
		$.ajax({
					type: "POST",
					url: 'ajax/product-add-delete.php',
					data: {u_id:id},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		
	};
	
		
		function statusChangefunc(id, status){
			$.ajax({
				url:'ajax/product-add-statuschange.php',
				type:'POST',
				data:{id, status},
				success: function(resp){
					console.log(resp);
					if(resp == 1){
						location.reload();
					}
				}
			})
		};
</script> 
  </body>
</html>