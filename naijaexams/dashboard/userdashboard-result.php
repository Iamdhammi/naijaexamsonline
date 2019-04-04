<?php include 'auth.php';?>
<?php require 'includes/header.php'; ?>
<body>
	<header class="navbar navbar-default" style="border: 0px;">
		<div class="container">
			<div class="navbar-header">
				<img src="../images/logo1.png" alt="" width="80" style="padding: 15px">
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left margin-top">
					<li><a style="font-size: 30px; margin-left: -40px;">Welcome To Naija Exams Online</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right nav-user margin-top cl-effect-2 xhide">
					<li class="nav"><a><span class="glyphicon glyphicon-question-sign"></span></a></li>
					<li class="nav-user">
						<a style="font-size: 17px;" class="nav-user dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user" style="font-size: 20px;"></i> User <span class="caret"></span>
						</a>
						<div class="dropdown-menu " style="padding: 10px;">
							<ul class="user-link">
								<li><a href="userdashboard-profile.php"><span class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
								<li><a href="logout.php"><span class="glyphicon glyphicon-remove"></span> Log Out</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div><!-- /.navbar-collapse -->
		</div>
		<nav class="navbar navbar-default">
			<div class="container" id="dashboard">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header imglg">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs" style="padding: 0px;">
					<ul class="nav navbar-nav navbar-left margin-top" id="dashboard-links">
						<li>
							<a href="index.php">
								<span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Dashboard
							</a>
						</li>
						<li >
							<a href="userdashboard-profile.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> My Profile
							</a>
						</li>
						<li>
							<a href="userdashboard-exam.php">
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> My Exams
							</a>
						</li>
						<li>
							<a href="userdashboard-result.php" class="active">
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> My Results
							</a>
						</li>
						<li>
							<a href="pastquestion.php">
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
				        <td><strong>S/NO.</strong></td>
				        <td><strong>Subject Name</strong></td>
				        <td><strong>Level</strong></td>
				        <td><strong>Score</strong></td>
				        <td><strong>Status</strong></td>
				      </tr>
				    </tbody>
					<?php
						 $sql = "SELECT * FROM `student` where `user_id` = '".$_SESSION['id']."' ";
						 $result = $conn->query($sql);
							$i = 1;
						 if($result){
							 while($row = $result->fetch_assoc()){
								echo '<tr>
								<td>'.$i.'</td>
								<td>'.$row['subject'].'</td>
								<td>'.$row['level'].'</td>
								<td>'.$row['score'].'</td>
								<td>'.$row['status'].'</td>
								</tr>';
							 }
						 }
					?>
					
			 	</table>
			</div>
	</section>

	
	<!--copy-rights-->
	<div class="copyright" style="margin-top: 350px;">
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