<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "login-files/includes/css.php";
 ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login-files/asset/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<div class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Enter Email" id="email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Enter Password" id="pass">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" id="submit">
							Login
						</button>
						<a class="login100-form-btn buttonsign_login"  href="register.php">
							Sign Up
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	
<?php
	include "login-files/includes/js.php";
 ?>	
 
<script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			$.ajax({
				url: 'ajax/login.php',
				type: 'POST',
				data: {email, pass},
				success: function(resp){
					console.log(resp);
					if(resp == 1){
							window.location.href = "index.php";
						} else{
						window.location.href = 'login.php';
						
					}
				}
			})
		});
	})
</script>
</body>
</html>