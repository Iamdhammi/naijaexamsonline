<?php include 'auth.php';?>
<?php 

		if(isset($_POST['edit'])){

			extract($_POST);
			$email = $_SESSION['email'];

			if($password == ""){
					
				$sql = "UPDATE users SET firstname='$fname' , lastname = '$lname' , email = '$newemail' , phone = '$phone'  WHERE id = '".$_SESSION['id']."'";

				if ($conn->query($sql) === TRUE) {
                    header('location:userdashboard-profile.php?message=1');

				} else {
						echo "Error updating profile: " . $conn->error;
				}
			}
			elseif($password === $rpassword){
				$pass = md5($password);
				$sql = "UPDATE users SET firstname='$fname' , lastname = '$lname' , email = '$newemail' , phone = '$phone' , password ='$pass'  WHERE id='".$_SESSION['id']."'";

				if ($conn->query($sql) === TRUE) {
                    header('location:userdashboard-profile.php?message=1');
				} else {
						echo "Error updating profile: " . $conn->error;
				}
			}
		

}
?>



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
							<a href="userdashboard-profile.php" class="active">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> My Profile
							</a>
						</li>
						<li>
							<a href="userdashboard-exam.php">
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> My Exams
							</a>
						</li>
						<li>
							<a href="userdashboard-result.php">
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

    <?php
        if(isset($_GET['message']) && $_GET['message'] == 1){
            echo '
            <section style="margin-top: 30px; text-align: center;">
			<div class="container">
				<div class="alert alert-success alert-dismissable">
			    	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    	<strong>Your profile has been updated</strong>
			 	</div>
			</div>
		</section>';
        }
    ?>

	<section style="margin-top: 20px;">
		<div class="container">
			<table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th>VIEW <span style="color: #C33037;">STUDENT PROFILE</span></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>
			        	<div class="row" style="margin-top: 50px;">
			        		<div class="col-lg-3">
			        			<div style="padding: 20px;">
			        				<div class="row">
			        					<div class="col-lg-12">
										<?php if ($_SESSION['image'] != "" ){ 
												    
													echo  "<img src='../images/".$_SESSION['image']."' class='img__size'>" ;
												 }
												 else{ 
													 echo "<img src='../images/avatar.png' class='img__size'>" ;
												 } 
											 ?>
										
			        					</div>
			        					<div class="col-lg-12" style="padding: 10px;">
			        						<button type="button" class="btn btn-success" style="width: 180px;">Change Password</button>
			        					</div>
			        				</div>
			        			</div>
			        		</div>
			        		<div class="col-lg-9">
									<form action="#" method="post" >
										<table class="table table-bordered" style="margin-top: 20px;">
											<tbody>
												<tr>
													<td><span style="font-weight: bold; color: #C33037;">First Name</span></td>
													<td><span style="font-weight: bold; color: #C33037;">last Name</span></td>
												</tr>
												<tr>
													<td><input type="text" value="<?php echo $_SESSION['fname'];?>" name="fname" style="width: 70%"></td>
													<td><input type="text" value="<?php echo $_SESSION['lname'];?>" name="lname" style="width: 70%"></td>
												</tr>
												<tr>
													<td><span style="font-weight: bold; color: #C33037;">Registered Email</span></td>
													<td><span style="font-weight: bold; color: #C33037;">Phone Number</span></td>
												</tr>
												<tr>
													<td><input type="email" value="<?php echo $_SESSION['email'];?>" name="newemail" style="width: 70%" readonly></td>
													<td><input type="number" value="<?php echo $_SESSION['phone'];?>" name="phone" style="width: 70%"></td>
												</tr>
												<tr>
													<td><span style="font-weight: bold; color: #C33037;">New Password</span></td>
													<td><span style="font-weight: bold; color: #C33037;">Retype Password</span></td>
												</tr>
												<tr>
													<td><input type="password"  name="password" style="width: 70%"></td>
													<td><input type="password"  name="rpassword" style="width: 70%"></td>
												</tr>
												<tr>
													<td></td>
													<td><button type="submit" class="btn btn-success" name ="edit">Update</button></td>
												</tr>
											</tbody>
									</table>
									</form>
			        			
			        		</div>
			        	</div>
			        </td>
			      </tr>
			    </tbody>
		 	</table>
		</div>
	</section>
	<br><br><br>

	
	<!--copy-rights-->
	<div class="copyright">
			<!-- container -->
			<div class="container">
				<div class="copyright-left">
				<p>© 2018 NaijaExamOnline. All rights reserved | Design by <a href="#">Dagenius</a></p>
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