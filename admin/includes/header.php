<?php include 'config/config.php';
	
	
	if(isset($_SESSION['token'])){
		$userid = $_SESSION['token'];
		$userdata = "select * from admin_user where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
	}
	//print_r($userinfo);
?>
<div class="min-height-300 bg-primary position-absolute w-100"></div>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           <li class="nav-item d-flex align-items-center">
              
			  <?php
				if(isset($_SESSION['token'])){
					?>
					<a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $userinfo['name'] ?></span>
              </a>
					<?php
				} else {
					?>
					<a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
					<?php
				}
			  ?>
			  
			  
			  
            </li>  
          </ul>
        </div>
      </div>
    </nav>
    
  </main>