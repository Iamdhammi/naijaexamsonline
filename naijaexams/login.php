<?php  session_start(); ?>
<?php require 'conn.php'?>
<?php

if (isset($_POST['loginform'])){
    extract($_POST);
    
	$pass = md5($password);

   $query = "select * from users where email = '$email' and password = '$pass' ";
   $result = $conn->query($query);
    
    if ($result)  {
		$_SESSION['email'] = $email;
		header('Location: dashboard/pastquestion.php');

	} else {
		echo "<script>alert('incorrect password')</script>";
	}
}
	?>
<!doctype html>
<html>


<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/13-12-2017/student_registration_form-demo_Free/1974889183/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jan 2018 08:48:23 GMT -->
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- fonts -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!-- /fonts -->
	<!-- css -->
	<link href="css/bootstrap.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/signup-style.css" rel="stylesheet" type='text/css' media="all" />

	<!-- /css -->
</head>

<body>
	<div class="overlay">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<img src="images/logo1.png" alt="" width="80" style="padding: 15px">
			</div>
		</div>
	</nav>
	<!--728x90-->
	<div class="content-agileits">
		<h2 class="title">Login</h2>
		<div class="left">
           <center>
           <?php if(isset($_GET['value']) && $_GET['value'] == 'pq' ){?>
            <p style="color:red;">PLEASE LOGIN TO CONTINUE</p>
            <form id="loginForm" method="post" action="">
                    <fieldset id="body">
                        <fieldset>
                            <label for="email" style="text-align: left;">Email Address</label>
                            <input type="email" id="email" name="email">
                        </fieldset>
                        <fieldset>
                                <label for="password" style="text-align: left;">Password</label>
                                <input type="password" id="password" name="password">
                        </fieldset>
                        <fieldset>
                            <input type="submit" id="login" value="Sign in" name ="loginform">
                        </fieldset>
                    </fieldset> 
            </form>
            <?php
           }
            ?>
           </center>
		</div>
		
		<div class="clear"></div>
	</div>
	<!--728x90-->

	<!--footer-->
		<div class="footer" style="margin-top: 50px;">
				<!-- container -->
				<div class="container">
					<div class="col-md-6 footer-left">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<!-- <li><a href="typography.html">Shortcodes</a></li> -->
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<form>
							<input type="text" placeholder="Email" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
					<div class="col-md-3 footer-middle">
						<h3>Address</h3>
						<div class="address">
							<p>756 gt globel Place,
								<span>CD-Road,M 07 435.</span>
							</p>
						</div>
						<div class="phone">
							<p>+1(100)2345-6789</p>
						</div>
					</div>
					<div class="col-md-3 footer-right">
						<h3>Book Info</h3>
						<p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- //container -->
			</div>
		<!--/footer-->
		<!--copy-rights-->
		<div class="copyright">
				<!-- container -->
				<div class="container">
					<div class="copyright-left">
					<p>© 2017 NaijaExamOnline. All rights reserved | Design by <a href="#">Dagenius</a></p>
					</div>
					<div class="copyright-right">
						<ul>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="twitter facebook"> </a></li>
							<li><a href="#" class="twitter chrome"> </a></li>
							<li><a href="#" class="twitter pinterest"> </a></li>
							<li><a href="#" class="twitter linkedin"> </a></li>
							<li><a href="#" class="twitter dribbble"> </a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>

				</div>
				<!-- //container -->
				<!---->
		
		<!---->
	</div>



	<!-- js -->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- //js -->

	<script src="js/bootstrap.js"></script>
	<script src="js/validator.min.js"></script>
	<!-- /js files -->
</div>
</body>
</html>
