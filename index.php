<!DOCTYPE html>
<html lang="en">
<head>
	<title>BreakingBarriers</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder
	<div id="preloder">
		<div class="loader"></div>
	</div> -->

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/main_logo.jpg" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About us</a></li>
							<li><a href="courselist.php">Courses</a></li>
							<li><a href="quiz.php">Feedback</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


    <!-- Hero section -->
    
    <?php 

// $host="localhost";
// $user="root";
// $password="";
// $db="demo";

// mysql_connect($host,$user,$password);
// mysql_select_db($db);
//function OpenCon()
 //{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "demo";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 //return $conn;
 //}
 


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    $result = $conn->query($sql);	
    // $result=mysql_query($sql);
    
    if($result->num_rows == 1){
		echo " You Have Successfully Logged in";
		include "courselist.php";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password for student";
        exit();
    }
        
}
function CloseCon($conn)
 {
 $conn -> close();
 }
?>

	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h1>Breaking Barriers</h1>
				<br>
				<p>
					<h5>We at Breaking Barriers help students connect to experts all fields all over the world.<br>
					 
				</h5></p>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<form method="POST" action="#"  class="intro-newslatter">
						<input type="text" name="username" placeholder="Enter Username"><br>
						<input type="password" name="password" placeholder="Enter password"><br><br>
						<input type="submit" name="submit" value="STUDENT LOGIN" class="site-btn">
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- signup section -->

	<?php 

// $host="localhost";
// $user="root";
// $password="";
// $db="demo";

// mysql_connect($host,$user,$password);
// mysql_select_db($db);
//function OpenCon()
 //{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "demo";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 //return $conn;
 //}
 


if(isset($_POST['username1'])){
    
    $uname=$_POST['username1'];
    $password=$_POST['password1'];
    
    $sql="select * from loginform1 where User='".$uname."'AND Pass='".$password."' limit 1";
    $result = $conn->query($sql);	
    // $result=mysql_query($sql);
    
    if($result->num_rows == 1){
		//echo " You Have Successfully Logged in";
		header('Location:'.'courselist.php');
		exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
//function CloseCon($conn)
// {
// $conn -> close();
//}
?>

	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Login as a teacher</h2>
							<p>Spread the knowledge you have on any course by reaching out to students all over the world</p>
						</div>
						<!-- signup form -->
						<form method="POST" action="#" class="signup-form">
							<input type="text" name="username1" placeholder="Enter Username"><br>
							<input type="password" name="password1" placeholder="Enter Password"><br><br>
							<input type="submit" name="submit" value="TEACHER LOGIN" class="site-btn">			
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- signup section end -->

	<!-- banner section -->
		<section class="banner-section spad">
			<div class="container">
				<div class="section-title mb-0 pb-2">
					<h2>Join Our Community Now!</h2>
					<p></p>
				</div>
				<div class="text-center pt-5">
					<a href="index.php" class="site-btn">Register Now</a>
				</div>
			</div>
		</section>
		<!-- banner section end -->

	<!-- footer section -->

				<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</html>