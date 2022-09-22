<?php 
	include 'config/config.php'; 
	$product_list = "select * from category";
	
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
					<th>Category-Id</th>
					<th>Category-Name</th>
					<th>Category-Image</th>
					<th>Status</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
	
		<?php
			while($row = mysqli_fetch_array($querylis)){
				?>
					<tr>
						<td><?php echo $row['category_id']; ?></td>
						<td><?php echo $row['category_name']; ?></td>
						<td>   
							<img  src="<?php echo 'asset/category/'.$row['category_image']; ?>" style="width:60px; height:60px; border-radius:60px">
						</td>	
						<td><?php echo $row['status']; ?></td>
					<td><a onclick="deleterecord(<?php echo $row['category_id'] ?>)" href="javascript:void(0)">Delete</a></td>
					<td class="edit"><a href="add-category.php?id=<?php echo $row["category_id"] ?>">Edit</a></td>
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
					url: 'ajax/category-delete.php',
					data: {u_id:id},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		
	}

</script> 
  </body>
</html>