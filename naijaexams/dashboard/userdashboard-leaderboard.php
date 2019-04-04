<?php require 'includes/header.php'; ?>
<body>
	<header class="navbar navbar-default" style="border: 0px;">
		<div class="container">
			<div class="navbar-header">
				<img src="images/logo1.png" alt="" width="80" style="padding: 15px">
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left margin-top">
					<li><a style="font-size: 30px; margin-left: -40px;">Welcome To Naija Exams Online</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right nav-user margin-top cl-effect-2">
					<li class="nav"><a><span class="glyphicon glyphicon-question-sign"></span></a></li>
					<li class="nav-user">
						<a style="font-size: 17px;" class="nav-user dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user" style="font-size: 20px;"></i> User <span class="caret"></span>
						</a>
						<div class="dropdown-menu" style="padding: 10px;">
							<ul class="user-link">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-remove"></span> Log Out</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
		</div>
		<nav class="navbar navbar-default" id="dashboard">
			<div class="container" style="background-color: #2793FD;" id="dashboard">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0px;">
					<ul class="nav navbar-nav navbar-left margin-top" id="dashboard-links">
						<li>
							<a style="border-right: 0.51px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard.php">
								<span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Dashboard
							</a>
						</li>
						<li >
							<a style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard-profile.php" >
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> My Profile
							</a>
						</li>
						<li>
							<a style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard-exam.php" >
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> My Exams
							</a>
						</li>
						<li>
							<a href="userdashboard-result.php" style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;" >
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> My Results
							</a>
						</li>
						<li>
							<a href="pastquestion.php" >
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Past Questions
							</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<!-- header -->

	<section style="margin-top: 70px;">
		<div class="container">
				<table class="table table-hover">
				    <thead style="background-color: #ddd; color: black;">
				      <tr>
				        <th><span style="color: #C33037;">MY</span> RESULTS</th>
				      </tr>
				    </thead>
			 	</table>
				<table class="table table-hover">
				    <tbody>
				      <tr>
				        <td><strong>Rating</strong></td>
				        <td><strong>Name</strong></td>
				        <td><strong>Total Point</strong></td>
				        <td><strong>Exam Given</strong></td>
				      </tr>
				      <tr>
				      	<td>1</td>
				        <td>test</td>
				        <td>0.00</td>
				        <td>1</td> 
				      </tr>
				      <tr></tr>
				    </tbody>
			 	</table>
			</div>
	</section>

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