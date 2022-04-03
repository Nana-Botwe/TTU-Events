<?php
 session_start();
//Database Configuration File
include('../admin/includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['AdminPassword']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {
$_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TTU Events System | Login Page </title>
  
 <link href="../images/ttu logo.jpg" rel="icon">
<!-- 
<link href="assets/css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="assets/css/style.css" rel='stylesheet' type='text/css' />

<link href="assets/css/font-awesome.css" rel="stylesheet"> 

<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>  -->

<style>
body{
	margin: 0;
	padding: 0;
	background: url(" ../assets/img/kk.jpg");
    /* background-size: cover; */
    width:100%;
	font-family: sans-serif;
}
.loginbox{
	width: 320px;
	height: 450px;
	background: rgba(0, 0, 0, 0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.avatar{
	width: 100px;
	height: 100px;
	border-radius:  50%;
	overflow: hidden;
	position: absolute;
	top: calc(-100px/2);
	left: calc(50% - 50px); 
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: aliceblue;
	font-size: 16px;
}
 input[type="email"], input[type="tel"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: aliceblue;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
.loginbox a{
	text-decoration: none;
	font-size: 12px;
	line-height: 20px;
	color: darkgrey;
	
	
}
.loginbox a:hover
{
	color: #ffc107;
}

</style>


</head> 
<body>

								<div class="loginbox">
                                   <img src="assets/images/ttu.jpg" class="avatar">
                              
                              <form method="post"  role="form">
                            <h1> <u> Login Here</u></h1>
                                        <p>Email</p>
                                    <input type="text" class="user" name="username" placeholder="Username" required="true">
                                           
                                                  <br> <br>
                                                		<p>Password</p>
                                               
                                       
											
											<input type="password" name="password" class="lock" placeholder="Password" required="true">
											<input type="submit" name="login" value="Sign In">
											



                                       <p>Click Here to Main menu <a href="../index.php" id="Tohome">Home</a>
                                   </form>
                                               <br><br>                     
                                   <marquee width="100%">Welcome to TTU Online NewsPortal  </marquee>
        
           
                              </div>
	
	  <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

</body>
</html>