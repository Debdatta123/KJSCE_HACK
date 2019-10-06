<!DOCTYPE html>
<html lang="en">
<head>
	<title>About us</title>
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

		<script>
				function readUrll(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						document.getElementById('img1')
							.setAttribute('src', e.target.result);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}
		
		</script>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

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
							<li><a href="courses.php">Courses</a></li>
							<li><a href="quiz.php">Feedback</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
                <a href="index.php">Home</a>
                <a href="courses.php">Courses</a>				
            </div>
        <div>
         <p><h4 style="color:white;">Welcome to your page!</h4><br>
            <h5 style="color:white;">Upload Biology Content here</h5>
            <br>
            
            <form class="signup-form" action="uploadBio.php" method="post" enctype="multipart/form-data">
                            <label for="fileToUpload" class="file-up-btn">Upload Course</label>
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="readUrll(this);">
							<!-- <img id='img1' height=100 width=100/> -->
							<?php
							$images = scandir("uploads", 1);
							if($images[0]){
								echo '<img src="uploads/'.$images[0].'" style=width = "300px" ; height = "400px" >';
							}
							?>
						<input type="submit" value="Upload Image" name="submit">
			</form>
         </p>
        </div>
		</div>
	</div>
	<!-- Page info end -->
    <br><br>
    <br>
    <br>
    <br>
	<!-- footer section -->
	<br><br>
    <br>
    <br>
	<br>
	<br><br>
    <br>
    <br>
	<br>
	<br><br>
    <br>
    <br>
    <br>	<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
</body>
</html>