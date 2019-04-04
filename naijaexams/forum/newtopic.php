<?php 
	require_once ('../conn.php');
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
			<div class="adjust">
			<button class="btn navbar-btn btn-adjust-1">
				Start New Topic
			</button>
		</div>
		</div>
	<!--<div class="">
			<i class="fa fa-user fa-2x font-adjust"></i>
		</div> -->
	</nav>
	<?php require_once ('includes/process.php'); ?>
	<div class="topdiv-adjust">
		<div class="container">
			<div class="tag">
				<p><a href="../dashboard/index.php">Home</a> > <a href="forum_user.php?page=1">General Discussion</a> > Start New Topic </p>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="new topics">
						<div class="row">
							<div class="col-lg-2 topic-content1">
								<div class="topic-content1-sub">
									<i class="fa fa-user fa-5x"></i>
								</div>
							</div>
							<div class="col-lg-10 topic-content2">
								<form action="newtopic.php" method="post">
									<div class="form-group">
										<input type="text" name="topic" placeholder="Enter Topic Title" id="topic">
									</div>
									<div class="form-group">
										<input type="text" name="category" placeholder="Enter Category" id="category">
									</div>
									<div class="form-group">
										<textarea name="description" rows="4" placeholder="Description"></textarea>
									</div>
									<div class="warning"><?php echo $warning; ?></div>
									<div class="newtopic">
		                               <input  type="submit" value="submit" name="submit" class="newtopic_btn">
		                            </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="category">
						<div class="category1-sub">
							<h4>Categories</h4>
						</div>
						<div class="category2-sub">
							<?php 
								$query = "SELECT * FROM forum ORDER BY id DESC LIMIT 0, 10";
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
		</div>
	</div>
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







