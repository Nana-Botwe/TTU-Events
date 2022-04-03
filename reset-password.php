<?php
 session_start();
//Database Configuration File
include('includes/config.php');


if(isset($_POST['login']))
  {
    $usernam=$_SESSION['AdminUserName'];
    $email=$_SESSION['AdminEmailId'];
    $password=md5($_POST['AdminPassword']);

        $query=mysqli_query($con,"update tbladmin set AdminPassword='$password'  where  AdminEmailId='$email' && AdminUserName='$usernam' ");
   if($query)
   {
echo "<script>alert('Password successfully changed');</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>BPMS | Reset Page </title>

<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assests/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons -->
<link href="assests/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->

<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 


<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
</head> 
<body>
	<div class="main-content">
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">TTU AdminPanel Reset Page</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome TTU AdminPanel  </h4>
					</div>
					<div class="login-body">
						<form role="form" method="post" action="" name="changepassword" onsubmit="return checkpass();">
							
							
							<input type="password" name="newpassword" class="lock" placeholder="New Password" required="true">
							
							<input type="password" name="confirmpassword" class="lock" placeholder="Confirm Password" required="true">
							
							<input type="submit" name="submit" value="Reset">
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="index.php">Already have an account</a>
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