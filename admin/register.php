<!DOCTYPE html>
<html lang="en">

<head>
<?php
	include "includes/css.php";
 ?>  
</head>

<body class="g-sidenav-show   bg-gray-100">
  
<!-- register-section -->
<div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">A lightweight and simple sign-up form</h1>
    </header>
    
    <form class="form">
		<div id="msg"></div>
		<div style="" id="error"></div>
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" id="name" />
        </div>
        
        <div class="form__group">
            <input type="text" placeholder="Email" class="form__input" id="email" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" id="password" />
        </div>
        
        <button class="btn" type="button" id="register">Register</button>
    </form>
</div>
  <!-- JS Files   -->
<?php
	include "includes/js.php";
 ?>  
<script>
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
	
		$("#register").click(function(){
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
})

</script>  
  </body>
</html>