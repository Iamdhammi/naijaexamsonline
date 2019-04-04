<?php require_once("includes/login.php") ?>
<?php  

	$resultPerPage = 7;
	$query1 = "SELECT * FROM forum ";
	$result1 = mysqli_query($conn, $query1);
	$number_of_results = mysqli_num_rows($result1);

	$number_of_pages = ceil($number_of_results/$resultPerPage);

	if (!isset($_GET['page'])) {
		$page = 1;
	}else {
		$page = $_GET['page'];
	}

	$this_page_first_result = ($page-1)*$resultPerPage;

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Forum: NaijaExams Online
	</title>
	<link rel="shortcut icon" href="../images/logo1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<meta name="keywords" content="NaijaExams Online">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--coustom css-->
	<link href="../css/forum-style.css" rel="stylesheet" type="text/css">
	<!--script-->
	<script src="../js/jquery-1.11.0.min.js"></script>
	<!-- js -->
	<script src="../js/bootstrap.js"></script>
	<!-- /js -->
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!--/fonts-->
	<!--hover-girds-->
	<link rel="stylesheet" type="text/css" href="../css/default.css" >
	<link rel="stylesheet" type="text/css" href="../css/component.css" >
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<script src="../js/modernizr.custom.js"></script>
	<!--/hover-grids-->
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>

</head>
<body>

	<!--Top Header -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navber-header">
				<img src="../images/logo1.png" class="navbar-brand">
			</div>
			
			<div class="register-btn">
				<ul class="list">
					<li><a href="../signup.php">REGISTER</a></li>
					<li>
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
			</li>
				</ul>
			</div>
			
		</div>
		<script src="../js/menu_jquery.js"></script>
	<!--<div class="">
			<i class="fa fa-user fa-2x font-adjust"></i>
		</div> -->
	</nav>

	<!--Body Section -->
	<div class="topdiv-adjust">
		<div class="container">
			<ul class="pagination">
				<?php if ($page != 1) { ?>
				<li><a href="forum.php?page=<?php echo ($page-1 ); ?>"><?php echo "Previous"; ?></a></li> 
				<?php } ?>
				<?php for ($page = 1; $page <= $number_of_pages; $page++){  ?>

				<li <?php if($_GET['page'] == $page) { echo "class = 'active'";} ?>><a href="forum.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
				<?php } ?>
				<?php if ($page != 1 && $_GET['page'] < $number_of_pages) { ?>
				<li><a href="forum.php?page=<?php echo ($_GET['page'] + 1 ); ?>"><?php echo "Next"; ?></a></li> 
				<?php } ?>
			</ul>
			<div class="row">
				<div class="col-lg-8">
					<?php 

						$query = "SELECT * FROM forum ORDER BY id DESC LIMIT " . $this_page_first_result . ', ' .$resultPerPage;
						$topics_set = mysqli_query($conn, $query);

						if (!$topics_set) {
							die("Query Failed");
						}
						


					?>
					<?php 
						while ($topic_add = mysqli_fetch_assoc($topics_set)) {
							$topic_id = $topic_add["id"];
					?>
					<div class="topics">
						<div class="row">
							<div class="col-sm-2 topic-content1">
								<div class="topic-content1-sub">
									<i class="fa fa-user fa-5x"></i>
								</div>
							</div>
							<div class="col-sm-8 topic-content2">
								<h4>
									<?php echo $topic_add["topic_name"] ?>
								</h4>
								<p>
									<?php echo $topic_add["category"]; ?>
								</p>
								<div class="topic-bottom">
									<p>
										Posted On : <?php echo $topic_add["date"]; ?> by <?php echo $topic_add["topic_creator"]; ?> at <?php echo $topic_add["time"]; ?>
									</p>
								</div>
							</div>
							<?php  
							$query5 = "SELECT * FROM comments WHERE topic_id ='". $topic_add["id"]."' ";	
							$result5 = mysqli_query($conn, $query5);
							if (!$result5) {
								die('Query Failed');
							}
							$number_of_comments = mysqli_num_rows($result5);
							?>
							<div class="col-sm-2 topic-content3">
								<div class="topic-content3-sub">
									<i class="fa fa-comment fa-3x"></i>
									<p><?php echo $number_of_comments; ?></p>
								</div>
							</div>
						</div>
					</div>
					<br>
				<?php }; ?>
				</div>
				<div class="col-lg-4">
					<div class="category">
						<div class="category1-sub">
							<h4>Categories</h4>
						</div>
						<div class="category2-sub">
							<?php 
								$query = "SELECT * FROM forum ORDER BY id DESC LIMIT 0, 20";
								$cat_set = mysqli_query($conn, $query);
								if (!$cat_set) {
									die('Failed');
								}
							?>
							<?php while ($cat = mysqli_fetch_assoc($cat_set)) {
						
							?>
							<div class="row">
								<div class="col-lg-10">
									<p><?php echo $cat['category'];?></p>		
								</div>
								
							</div>
							<?php } ?>
							

						</div>
					</div>
					<br>
				</div>
			</div>
			<ul class="pagination">
				<?php $page = $_GET['page'] ?>
				<?php if ($page != 1) { ?>
				<li><a href="forum.php?page=<?php echo ($page-1 ); ?>"><?php echo "Previous"; ?></a></li> 
				<?php } ?>
				<?php for ($page = 1; $page <= $number_of_pages; $page++){  ?>

				<li <?php if($_GET['page'] == $page) { echo "class = 'active'";} ?>><a href="forum.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
				<?php } ?>
				<?php if ($page != 1 && $_GET['page'] < $number_of_pages) { ?>
				<li><a href="forum.php?page=<?php echo ($_GET['page'] + 1 ); ?>"><?php echo "Next"; ?></a></li> 
				<?php } ?>
			</ul>
		</div>

		<!--copy-rights-->
		<div class="copyright">
			<!-- container -->
			<div class="container">
				<center>
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
				</center>
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