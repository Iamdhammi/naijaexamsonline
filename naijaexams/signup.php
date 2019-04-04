<?php require 'conn.php'?>
<?php 
if (isset($_POST['signup'])){
	  extract($_POST);
	  $subj = implode(',',$subj_list);
	  $pass = md5($password);

	  $imagename = $_FILES["myimage"]["name"];
	  $target = "images/".basename($imagename);

	//   echo $imagename;
	//   echo $_FILES["myimage"]["name"];

	  if($password == $rpassword){
		$hash = md5( rand(0,1000) ); 
		$query = "insert into users (firstname , lastname ,subjects , email ,phone ,password , gender , logged , role ,level,image, hash , active) value('$firstname' , '$lastname'  , '$subj' , '$email' , '$phone' , '$pass' , '$gender' , 0  , 'student' ,1 ,'$imagename' , '". mysqli_escape_string($conn , $hash) ."' , 0 )";
         
		
		if(mysqli_query($conn , $query)){
			move_uploaded_file($_FILES['myimage']['tmp_name'], $target);
			$to = $email; 
			$subject = 'Signup | Verification';
			$message = '
 			Thanks for signing up!
			Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
			------------------------
			Username: '.$email.'
			Password: Your Password
			------------------------
 
			Please click this link to activate your account:
			http://naijaexamsonline.com//verify.php?email='.$email.'&hash='.$hash.'
 
			'; 
                     
			$headers = 'From:noreply@naijaexamonline.com' . "\r\n"; // Set from headers
			mail($to, $subject, $message, $headers); // Send our email
			
		 $message =  '
		 <div class="alert alert-success alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    <strong>Your account has been created, please verify it by clicking the activation link that has been send to your email.</strong>
		</div>';

		}
		else{
			echo("Error description: " . mysqli_error($conn));
		}
		//$msg = '';
	  }
	  else{
		  $message = "Password do not match";
	  }
     
}

  if (isset($_POST['loginform'])){
    extract($_POST);
    $pass = md5($password);
   $query = "select * from users where email = '$email' and password = '$pass' ";

   $result = $conn->query($query);
   
   if ($result->num_rows > 0)  {
		$_SESSION['email'] = $email;
		header('Location: dashboard/index.php');
	} else {
		echo '<script>alert("Incorrect password")</script>' ;
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
								<li><a href="contactus.php"><span data-hover="Contact">Contact Us</span></a></li>
								<li><a href="#"><span data-hover="Register">Register</span></a></li>
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
	<!--728x90-->
	<div class="content-agileits">
	   <h3><?php if(isset($message)){ echo $message ;} ?></h3>
		<h2 class="title">Registration Form</h2>
		
		<div class="left">
			<form action="#" method="post" data-toggle="validator" enctype="multipart/form-data">
				<div class="form-group">
					<label for="firstname" class="control-label">First Name:</label>
					<input type="text" class="form-control" id="firstname" placeholder="First Name" data-error="Enter Your First Name" name="firstname" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="lastname" class="control-label">Last Name:</label>
					<input type="text" class="form-control" id="lastname" placeholder="Last Name" data-error="Enter Your Last Name" name ="lastname" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label">Courses</label>
					<?php 
						$sql = "SELECT  * FROM `subjects`";
						$result = $conn->query($sql);
							if($result){
								while($row = $result->fetch_assoc()){
										echo '<div class="checkbox">
												<label>';
										echo '<input type="checkbox" name="subj_list[]" value="'.$row['subject'].'" />' .ucfirst($row['subject']).'<br>' ;
										echo '</div>';
								}
						   }
					?>
				</div>
				<div class="form-group">
					<label for="inputEmail" class="control-label">Email:</label>
					<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="This email address is invalid" name="email" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="Image" >Image</label>
					<input type="file" name="myimage">
				</div>
				
				<div class="form-group">
					<label for="Phone" class="control-label">Phone:</label>
					<input type="number" class="form-control" id="Phone" placeholder="Phone" data-error="Enter Your Phone Number" name="phone" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group">
					<label for="inputPassword" class="control-label">Password:</label>
					<div class="form-inline row">
						<div class="form-group col-sm-6 agileits-w3layouts">
							<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" name="password" required>
							<div class="help-block">Minimum of 6 characters</div>
						</div>
						<div class="form-group col-sm-6 w3-agile">
							<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match"
							    placeholder="Confirm Password" name ="rpassword"required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<!--728x90-->
				<div class="form-group w3ls-opt">
					<label for="Phone" class="control-label">Gender</label>

					<label class="w3layouts">
						<input type="radio" name="gender" id="hire" value="male" checked>Male
					</label>
					<label class="w3layouts label2">
						<input type="radio" name="gender" id="work" value="female">Female
					</label>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-lg" name="signup" >submit</button>
				</div>
			</form>
		</div>
		<div class="right"></div>
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
