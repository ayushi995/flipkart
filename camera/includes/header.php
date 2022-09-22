<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user_id'])){
	}
	$sqlfull = "select * from  category ";
	$queryfull = mysqli_query($conn,$sqlfull);
	
	$sql ="select * from pro_category";	
	$solution = mysqli_query($conn, $sql);
	
	$pgs ="select * from proadd";
	
	
?>
<section class="section-one">
	<div class="div_one_one">
		<div class="logo_one">
		<a href="index.php">
				<div class="flip_one"><img src="asset/flip.png" /></div>
				<div class="plus_one">Explore<span>Plus</span><img src="asset/flip-icon.png" /></div>
		</a>
		</div>		
			<div class="search-bar_one">
				<input type="text" placeholder="Search for products, brands and more" />
				<button><i class="fas fa-search"></i></button>
			</div>
			<?php 
				if(isset($_SESSION["userid"])){
				$username = $_SESSION["name"];
			?>	
			<div class="login-btn_one username_padding">
				<a href="#" id="login_btn"><span><?php echo $username; ?></span></a>
				<div class="login_hover_one">
					<ul>	
						<li><a href="userorder.php"><span><i class="fas fa-user-circle"></i></span>Your Orders</a></li>
						<li><a href="logout.php"><span><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
					</ul>
				</div>
			</div>
			<?php
				}else{
			?>
			<div class="login-btn_one">
				<a href="login.php" id="login_btn">Login</a>
				<div class="login_hover_one">
					<div class="down-icon_one"><i class="fas fa-caret-up"></i></div>
						<div class="sign_up_one"><a href="#">
							<div class="row">
								<div class="col-md-8"><div class="new_cus_one">New Customer</div></div>
								<div class="col-md-4">
									<div class="sign_one">
										Sign Up
									</div>
								</div>
							</div>
						</a></div>
					<ul>	
						<li><a href="#"><span><i class="fas fa-user-circle"></i></span>My Profile</a></li>
						<li><a href="#"><span><i class="fas fa-plus"></i></span>Flipkart Plus Zone</a></li>
						<li><a href="#"><span><i class="fab fa-first-order"></i></span>Orders</a></li>
						<li><a href="#"><span><i class="fas fa-heart"></i></span>Wishlist</a></li>
						<li><a href="#"><span><i class="fas fa-crown"></i></span>Rewards</a></li>
						<li><a href="#"><span><i class="fas fa-gift"></i></span>Gift Cards</a></li>
					</ul>
				</div>
			</div>
			
			<?php
				}
			?>
							
			<div class="more_one">
				<div class="morebtn_one">More<span><i class="fas fa-angle-down"></i></span></div>
				<div class="more_hover_one">
					<div class="down-icon_one"><i class="fas fa-caret-up"></i></div>
					<ul>	
						<li><a href="#"><span><i class="fas fa-bell"></i></span>Notifications Preferences</a></li>
						<li><a href="#"><span><i class="fas fa-plus"></i></span>Sell on Flipkart</a></li>
						<li><a href="#"><span><i class="fab fa-first-order"></i></span>24*7 Customer Care</a></li>
						<li><a href="#"><span><i class="fas fa-chart-line"></i></span>Advertise</a></li>
						<li><a href="#"><span><i class="fas fa-download"></i></span>Download App</a></li>
					</ul>
				</div>
			</div>
			<div class="cart_one">
				<a href="#">
					<i class="fas fa-shopping-cart"></i>
					<span>Cart</span>
				</a>
			</div>
		</div>
	</div>
</section>

<!---section-two--->
<section class="section-two">
	<div class="main-div_two">
		<?php
			while($row = mysqli_fetch_array($queryfull)){
				?>
					<div class="div_two padding_left_two">
						<a href="list.php?id=<?php echo $row["category_id"] ?>">
							<div class="image_two">
								<img src="<?php echo '../admin/asset/category/'.$row['category_image']; ?>" />
							</div>
							<div class="text_two"><?php echo $row["category_name"] ?></div>
						</a>	
					</div>
				<?php
			}
		?>
	
		<!--
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img2_two.png" />
				</div>
				<div class="text_two">Fashion</div>
			</a>
		</div>
		<div class="div_two">
			<a href="list.php?id=<?php // echo $row["category_id"] ?>">
				<div class="image_two">
					<img src="asset/img3_two.png" />
				</div>
				<div class="text_two">Laptops</div>
			</a>
		</div>
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img4_two.png" />
				</div>
				<div class="text_two">Home</div>
			</a>
		</div>
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img5_two.png" />
				</div>
				<div class="text_two">Travel</div>
			</a>
		</div>
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img6_two.png" />
				</div>
				<div class="text_two">Appliances</div>
			</a>
		</div>
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img7_two.png" />
				</div>
				<div class="text_two">Furniture</div>
			</a>
		</div>
		<div class="div_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img8_two.png" />
				</div>
				<div class="text_two">Beauty,Toys & more</div>
			</a>
		</div>
		<div class="div_two padding_right_two">
			<a href="#">
				<div class="image_two">
					<img src="asset/img9_two.png" />
				</div>
				<div class="text_two">Grocery</div>
			</a>
		</div> -->
	</div>
</section>
