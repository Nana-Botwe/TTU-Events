<?php
 session_start();
//Database Configuration File
include('includes/config.php');

if(isset($_POST['login']))
  {
    $usernam=$_POST['AdminUserName'];
    $email=$_POST['AdminEmailId'];

        $query=mysqli_query($con,"select ID from tbladmin where  AdminEmailId='$email' and AdminUserName='$usernam' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['AdminUserName']=$usernam;
      $_SESSION['AdminEmailId']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS | Forgot Page </title>

<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 

</head> 
<body>
	<div class="main-content">
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Forgot Admin Password</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome TTU AdminPanel </h4>
					</div>
					<div class="login-body">
						<form role="form" method="post" action="">
							
							
							<input type="text" name="email" class="lock" placeholder="Email" required="true">
							
							<input type="text" name="usernam" class="lock" placeholder="Username" required="true" maxlength="20">
							
							<input type="submit" name="submit" value="Reset">
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="index2.php">Already have an account</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				
			</div>
		</div>
		
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>