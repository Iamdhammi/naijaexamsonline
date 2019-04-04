<?php  session_start(); ?>
<?php require 'conn.php'?>
<?php
if (isset($_POST['loginForm'])){
    extract($_POST);
	$pass = md5($password);

   $query = "select * from users where email = '$email' and password = '$pass' and role = 'student' and active = 1";
   $result = $conn->query($query);
    if ($result->num_rows > 0)  {
		$_SESSION['email'] = $email;
		header('Location: dashboard/index.php');

	} else {
		echo '<script>alert("Incorrect password or Wrong Email")</script>' ;
	}
}
	?>
<!doctype html>
<html>
<head>
<title>NaijaExams Online</title>
<link rel="shortcut icon" href="images/logo1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

 <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <!--<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />-->
  
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop : 
										$(this.hash).
											offset().
											   top},900);
				});
			});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script> 
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
								<li><a href="forum/forum.php?page=1"><span data-hover="Forum">Forum</span></a></li>
								<li><a href="contactus.php"><span data-hover="Contact">Contact Us</span></a></li>
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
		   <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
		<script>
			$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
			});
		</script>
		<div class="slider">
			<div class="callbacks_container">
				<div class="container__text">
					<h2>Welcome To Naija Exams Online</h2>
					<p>
						This is an integrated Question Bank Specifically designed for Students and Schools in Nigeria. This membership website offers Students rare opportunities to test their knowledge on specific subjects while preparing for any Examination <strong>(UTME, NECO, WAEC, POST UTME etc)</strong>.The online questions and solutions are prepared by seasoned Examiners & designed to help you achieve the desired success. Our strength is our elaborate database of questions and solutions. We make bold to say.....<strong>If you can’t find the question here, it probably does not exist.</strong> 
					</p>
				</div>
			</div>
		</div>
	</div>			
</div>
<!--header-->
<!--weelcome-->
<!--/welcome-->
<div class="welcome-grids">
	<div class="container" style="padding:50px 0;">
		<div class="welcome-gridsinfo">
		<div class="col-md-4 welcome-grid" style="background-image:url(images/a1.jpg);">
			<div class="home-overlay"></div>
			<div>
				<i class="glyphicon glyphicon-pencil"> </i>
				<h3>Take a free Test</h3>
				<p style="font-weight:bold">
					<!-- Agric.Sc,  -->
					<a href="freetest/biology.php">Biology</a>, <a href="freetest/chemistry.php">Chemistry</a>, 
					<a href="freetest/geo.php">Geography</a>, 
					<a href="freetest/english.php">English</a>, 
					<a href="freetest/physics.php">Physics</a>, 
					<a href="freetest/maths.php">Maths</a>, 
					<a href="freetest/govt.php">Government</a>, 
					<a href="freetest/genst.php">General Paper</a>, 
					<a href="freetest/comp.php">Computer Studies</a>, 
					<a href="freetest/comm.php">Commerce</a>, 
					<a href="freetest/history.php" >History</a>
					<!-- and many more. -->
				</p>	
			</div>
		</div>
		<div class="col-md-4 welcome-grid" style="background-image:url(images/a2.jpg);">
			<div class="home-overlay"></div>
			<div>
				<i class="glyphicon glyphicon-font"> </i>
				<h3>Avaliable Assessment Tests.</h3>
				<p style="font-weight:bold">
					WASSCE, NECO, UTME, POST UTME, JUNIOR-WAEC/NECO, NABTEB and others.
				</p>
			</div>	
		</div>
		<div class="col-md-4 welcome-grid" style="background-image:url(images/a3.jpg);">
			<div class="home-overlay"></div>
			<div>
				<i class="glyphicon glyphicon-blackboard"> </i>
				<h3>Revolutionary Educational Website</h3>
				<p> NAIJA EXAMS ONLINE  have been developed to aid students in Preparing for Certificate, Matriculation, Post UTME and Job placement Examination.</p>
			</div>
		</div>
	</div>
</div>

<div class="about" style="background-color:black;color:white;">
	 <div class="container">
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="images/abt.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
				 <h3>ABOUT NAIJA EXAMS ONLINE</h3>
				 <p style="">
				 	<strong>NAIJA EXAMS ONLINE</strong> have been developed to aid students in Preparing for <strong>Certificate, Matriculation, Post UTME and Job placement Examination</strong>, The website is a membership site with self preparatory tools designed to improve the Academic performance of Students and eradicate malpractices. The website was designed to aid pupils in Senior Secondary School and those preparing for <strong>Matriculation Examination and post-utme examination</strong>. The site helps teachers in evaluating the level of preparedness of their students for both internal and external Examinations.
				 </p>
				 <p>
				 	Our CBT is compatible with most browsers, including <strong>Internet Explorer, Firefox, Chrome, Safari, and it supports Windows, Macintosh, and Linux</strong>. In addition, it’s also compatible with iPod and Android Tablets. If you don’t have a particular preference, we recommend you to use the <strong>Chrome browser</strong>, which allows you to have max speed and performances. It’s free and can be downloaded from www.google.com/chrome
				 </p><br><br>

				 </p>
			 </div>
			 <div class="clearfix"> </div>
		 </div>
		 <div style="color:white;">
				 <p style="font-weight:bold;text-align:center"><span style="font-weight:bold;">AVALIABLE ASSESSMENT TESTS : <br><br></span>WASSCE , NECO , UTME , POSTUTME , JUNIOR WAEC/NECO , NABTEB , OTHERS</div>
	 </div>
</div>

<div class="welcome-grids">
	<div class="container" style="padding:50px 0;">
		<div class="welcome-gridsinfo">
		<div class="col-md-4 welcome-grid" style="    padding: 10px 75px;padding-left:0px">
			<div class="home-overlay" style="opacity : 1"></div>
			<!--<div>-->
			<!--	<i class="glyphicon glyphicon-pencil"> </i>-->
			<!--	<h3>Take a free Test</h3>-->
			<!--	<p style="font-weight:bold">-->
			<!--		Agric.Sc, Biology, Chemistry, Geography, English, Physics, Maths, Government, General Paper, Computer Studies, Commerce, History, and many more.-->
			<!--	</p>	-->
			<!--</div>-->
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
		<div class="col-md-4 welcome-grid">
			<div class="home-overlay" style="opacity : 1"></div>
				
		</div>
		<div class="col-md-4 welcome-grid">
			<div class="home-overlay" style="opacity : 1"></div>
			<div>
			<table align="center"><tr><td align="center">
<strong><font face="Arial" size="4">Quote of the Day</font></strong><br>
<script language="JavaScript" type="text/javascript">
<!--
var fontface="Arial";
var textcolor="white";
var textsize="4";
//-->
</script>
<script language="JavaScript" src="http://nickeysurf.com/quotes/qotd.js" type="text/javascript"></script>
</td></tr></table>
			</div>
		</div>
	</div>
</div>


<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6">
				
				
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
