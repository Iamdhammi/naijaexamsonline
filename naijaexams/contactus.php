<?php 
if (isset($_POST['contact'])){
	 extract($_POST);
	$to = 'info@naijaexamsonline.com'; 
	$subject = 'Report ';
	$message = '
 			Users details below :
 
			------------------------
			Name: '.$name.'
			Email: '.$email.'
			Subject: '.$subject.'
			Message: '.$message.'
			------------------------
        ';
                     
	$headers = 'New Message'. "\r\n"; // Set from headers
	mail($to, $subject, $message, $headers); // Send our email
			
	$message =  '
		 <div class="alert alert-success alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    <strong>Your email has been sent</strong>
		</div>';

}
?>

<!doctype html>
<html>

<head>
	<title>Education Tutorial a Educational Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--bootstrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--coustom css-->
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!--script-->
	<script src="js/jquery-1.11.0.min.js"></script>
	<!-- js -->
	<script src="js/bootstrap.js"></script>
	<!-- /js -->
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic'
	 rel='stylesheet' type='text/css'>
	<!--/fonts-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!--script-->
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 900);
			});
		});
	</script>
	<!--/script-->
</head>

<body>
	<!--header-->
	<div class="header" id="home">
	<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
					<!-- <h1><a class="navbar-brand" href="index.html">Education<br /><span>Tutorial</span></a></h1> -->
					<img src="images/logo1.png" alt="" width="80">
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
								<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
								<!-- <li><a href="about.html"><span data-hover="About">About</span></a></li> -->
								<li><a href="pastquestion.php"><span data-hover="Past Question">Past Questions</span></a></li>
								<li><a href="#"><span data-hover="Schorlaships">Schorlaships</span></a></li>
								<li><a href="#"><span data-hover="Videos">Videos</span></a></li>
								<li><a href="#"><span data-hover="Forum">Forum</span></a></li>
								<li><a href=""  class="active"><span data-hover="Contact">Contact Us</span></a></li>
								<li><a href="signup.php"><span data-hover="Register">Register</span></a></li>
							</ul>
							<div class="clearfix"> </div>
						</div><!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
				<div class="login-pop">
						<div id="loginpop"><a href="#" id="loginButton"><span>Login</span></a>
								<div id="loginBox">                
									<form id="loginForm" method="post">
											<fieldset id="body">
												<fieldset>
													  <label for="email">Email Address</label>
													  <input type="text" id="email" name="email">
												</fieldset>
												<fieldset>
														<label for="password">Password</label>
														<input type="password" id="password" name="password">
												 </fieldset>
												<input type="submit" id="login" value="Sign in" name="loginForm">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
										<span><a href="forgot_password.php">Forgot your password?</a></span>
										<a href="signup.php" >Sign Up</a>
								 </form>
							</div>
					    </div>
						</div>
						<script src="js/menu_jquery.js"></script>
				</div>
			</nav>
<!--/script-->
		<!--/script-->
		<div class="clearfix"> </div>
	</div>
	<!-- Top Navigation -->
	<div class="banner banner5">
		<div class="container">
			<h2>Contact Us</h2>
		</div>
	</div>
	<!--header-->
	<!-- contact -->
	<div>
	<?php	
		if(isset($message)){
			echo $message;
		}

	?>
	</div>
	<div class="contact">
		<!-- container -->
		<div class="container">
			<!-- <div class="contact-info">
				<h3 class="c-text">Find Us</h3>
			</div> -->
			<!-- <div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d387144.0363579609!2d-73.97967999999999!3d40.70562585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1420306161351"></iframe>
				</div> -->
			<div class="contact-info cf-1">
				<div class="contact-info-text">
					<h3>Feel free to shoot us a mail</h3>
				</div>
				<div class="contact-info-grids">
					<form action="" method="post">
						<input type="text" placeholder="Name" required="" name="name">
						<input type="email" placeholder="Email" required name="email">
						<input type="text" placeholder="Subject" required name="subject">
						<textarea placeholder="Message" required="" name="message"></textarea>
						<input type="submit" name="contact" value="SEND">
					</form>
				</div>
			</div>
			<div class="contact-grids">
				<div class="col-md-6 contact-grid-middle">
					<h3>Phones :</h3>
					<ul>
						<li>Ph 1: +234 803 359 9409</li>
					</ul>
				</div>
				<div class="col-md-6 contact-grid-right">
					<h3>E-mail :</h3>
					<a href="mailto:info@naijaexamsonline.com">info@naijaexamsonline.com</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6">
				
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=199153080436452&autoLogAppEvents=1';
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>



  				<!-- Your like button code -->
  				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
			</div>
			
			<!-- <div class="clearfix"> </div>	 -->

			<div class="col-md-6">
					<!-- hitwebcounter Code START -->
				<a href="http://www.hitwebcounter.com" target="_blank">
				<img src="http://hitwebcounter.com/counter/counter.php?page=6977653&style=0009&nbdigits=4&type=ip&initCount=0" title="Counter for tumblr" Alt="Counter for tumblr"   border="0" >
				</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="" 
                                        target="_blank" style="font-family: ; 
                                        font-size: px; color: #; text-decoration:  ;">                                       </>
                                        </a>   
			</div>
		</div>
		
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>© 2018 NaijaExamOnline. All rights reserved | Design by <a href="#">Dagenius & D'Bel</a></p>
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
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
	</div>
<!--/copy-rights-->
</body>

</html>