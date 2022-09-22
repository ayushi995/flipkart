<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include "includes/css.php";
?>
</head>
<body>
 <!---Login-section--->
<section class="sign-up-main-section" id="login">
<section class="section-one_sp">
	<div class="main-div_sp">
				<div class="left-main_sp">
					<span class="left-span_sp">
						<span>Looks like<br>you're new here!</span>
					</span>
					<p class="left-p_sp">
						<span>Sign up with your mobile<br> number to get started</span>
					</p>
				</div>
		
				<div class="right-main_sp">
					<div class="form_sp">
						<div class="input_sp">
							<div>Enter Email</div>
							<input type="text" placeholder="" id="email_login"/>
						</div>
						<div class="input_sp pass_sp">
							<div>Enter Password</div>
							<input type="password" placeholder="" id="pass_login"/>
						</div>
						<div class="text-right_sp">
							By continuing, you agree to Flipkart's Term of Use and Privacy Policy.
						</div>
						<div class="button-main-right_sp">
							<button id="login_submit">Login</button>
						</div>
						<div class="last-line_login_sp">
							<a href="#" id="register_btn">New to Flipkart? Create an account</a>
						</div>
					</div>
				</div>
				<div style="clear:both"></div>
	</div>
</section>	
</section>


<!---Register-section--->
<section class="sign-up-main-section" id="register">
<section class="section-one_sp">
	<div class="main-div_sp">
				<div class="left-main_sp">
					<span class="left-span_sp">
						<span>Looks like<br>you're new here!</span>
					</span>
					<p class="left-p_sp">
						<span>Sign up with your mobile<br> number to get started</span>
					</p>
				</div>
		
				<div class="right-main_sp register_right_sp">
					<div class="form_sp">
						<div id="error"></div>
						<div class="input_sp">
							<div>Enter Full Name</div>
							<input type="text" placeholder="" id="name"/>
						</div>
						<div class="input_sp pass_sp">
							<div>Enter Email</div>
							<input type="text" placeholder="" id="email"/>
						</div>
						<div class="input_sp pass_sp">
							<div>Enter Password</div>
							<input type="password" placeholder="" id="password"/>
						</div>
						<div class="text-right_sp">
							By continuing, you agree to Flipkart's Term of Use and Privacy Policy.
						</div>
						<div class="button-main-right_sp">
							<button id="continue">Continue</button>
							<div><a href="#">Existing User? Sign Up</a></div>
						</div>
					</div>
				</div>
				<div style="clear:both"></div>
	</div>
</section>	
</section>

<?php
	include "includes/js.php";
?>
<script>
$("#register_btn").click(function(){
		$("#register").css("display","block");
		$("#login").css("display","none");
	});
	
	$("#login_btn").click(function(){
		$("#login").css("display","block");
		$("#register").css("display","none");
	});
	
 $(document).ready(function(){
	$("#name").change(function(){
		$("#error").html("");
	});
	$("#email").change(function(){
		$("#error").html("");
	});
	$("#password").change(function(){
		$("#error").html("");
	});
	
		$("#continue").click(function(){
			var name = $("#name").val();
			var email = $("#email").val();
			var password = $("#password").val();
			if(name == ""){
				$("#error").html("Please Enter Your Name");
				return false;
			}
			else if(email == ""){
				$("#error").html("Please Enter Your Email");
				return false;
			}
			else if(password == ""){
				$("#error").html("Please Enter Your Password");
				return false;
			}
			
			$.ajax({
				url: "ajax/register.php",
				type: "POST",
				data: {u_name:name, u_email:email, u_password:password},
				success: function(resp){
					if(resp == 1){
						$("#msg").html("Your Register Successfully");
						$("#name").val('');
						$("#email").val('');
						$("#password").val('');
						
						window.location.href = "index.php";
					}
				}
			});
		});
		
		$("#login_submit").click(function(){
			var email = $("#email_login").val();
			var pass = $("#pass_login").val();
			
			$.ajax({
				url: 'ajax/login.php',
				type: 'POST',
				data: {email, pass},
				success: function(resp){
					console.log(resp);
					if(resp == 1){
							window.history.go(-1);
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
