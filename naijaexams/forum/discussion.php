<?php 
	require_once("../conn.php");
?>
<?php  

	$resultPerCommentPage = 5;
	$query1 = "SELECT * FROM comments ";
	$result1 = mysqli_query($conn, $query1);
	$number_of_results = mysqli_num_rows($result1);

	$number_of_commentpages = ceil($number_of_results/$resultPerCommentPage);

	if (!isset($_GET['commentpage'])) {
		$commentpage = 1;
	}else {
		$commentpage = $_GET['commentpage'];
	}

	$this_page_first_result = ($commentpage-1)*$resultPerCommentPage;

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
			<a href="newtopic.php" class="btn navbar-btn btn-adjust-1">
				Start New Topic
			</a>
		</div>
		</div>
	<!--<div class="">
			<i class="fa fa-user fa-2x font-adjust"></i>
		</div> -->
	</nav>

	<div class="topdiv-adjust">
		<div class="container">
			<div class="tag">
				<p><a href="../dashboard/index.php">Home</a> > <a href="forum_user.php?page=1">General Discussion</a> > Topic Details </p>
			</div>
			<?php require_once("includes/comment.php"); ?>
			<div class="row">
				<div class="col-lg-8">
					<?php 
						if ($_GET["id"]) {
							$query = "SELECT * FROM forum WHERE id='".$_GET['id']."' ";
							$check = mysqli_query($conn, $query);
							if (!$check) {
								 	die("Failed");
								 }	 
						}
					?>
					<?php while($select = mysqli_fetch_assoc($check)){ 

					?>
						 
					<div class="topics">
						<div class="row">
							<div class="col-lg-2 topic-content1">
								<div class="topic-content1-sub">
									<i class="fa fa-user fa-5x"></i>
								</div>
							</div>
							<div class="col-lg-10 topic-content2">
								<h4>
									<?php echo $select['topic_name'] ;?>
								</h4>
								<p>
									<?php echo $select['topic_content']; ?>
								</p>
								<div class="topic-bottom">
									<p>
										Posted On : <?php echo $select["date"]; ?> by <?php echo $select["topic_creator"]; ?> at <?php echo $select["time"]; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
					<?php }; ?>
					<div><h4>Comments</h4></div>
					<?php

					if ($_GET['id']) {
					
						$query ="SELECT * FROM comments WHERE topic_id ='".$_GET['id']."' " ;
						$query .= " ORDER BY id DESC ";
						$query .= " LIMIT " . $this_page_first_result . ', ' .$resultPerCommentPage;
						$com = mysqli_query($conn, $query);
						if (!$com) {
							die('query failed');
						}
					}

					?>
					<?php  
						while ($get = mysqli_fetch_assoc($com)) {
							
						
					?>
					<div class="topics">
						<div class="row">
							<div class="col-lg-2 topic-content1">
								<div class="topic-content1-sub">
									<i class="fa fa-user fa-5x"></i>
								</div>
							</div>
							<div class="col-lg-10 topic-content2">
								<p>
									<?php echo $get['comment']; ?>
								</p>
								<div class="topic-bottom">
									<p>
										Posted on: <?php echo $get['date']; ?> by <?php echo $get["creator"];?> at <?php echo $get["time"];?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<?php } ?>
					<ul class="pagination">
						<?php  
							if (!isset($_GET['commentpage'])) {
									$commentpage = 1;
								}else {
									$commentpage = $_GET['commentpage'];
							}
						?>
						<?php if ($commentpage != 1) { ?>
						<li>
							<a href="discussion.php?id=<?php echo $_GET["id"]; ?>&commentpage=<?php echo ($_GET['commentpage'] - 1 ); ?>"><?php echo "Previous"; ?></a>
						</li> 
						<?php } ?>

						<?php for ($commentpage = 1; $commentpage <= $number_of_commentpages; $commentpage++){  ?>
						<li <?php if($_GET['commentpage'] == $commentpage) { echo "class = 'active'";} ?>>
							<a href="discussion.php?id=<?php echo $_GET["id"]; ?>&commentpage=<?php echo $_GET['commentpage']; ?>"><?php echo $commentpage; ?></a>
						</li>
						<?php } ?>
						<?php 
							if($commentpage != 1 && $_GET['commentpage'] < $number_of_commentpages ) {
						?>
						<li>
							<a href="discussion.php?id=<?php echo $_GET["id"]; ?>&commentpage=<?php echo ($_GET['commentpage'] + 1 ); ?>"><?php echo "Next"; ?></a>
						</li> 
						<?php } ?>
						
					</ul>
					<div class="topics comment">
						<div class="row">
							<div class="col-lg-12">
								<div class="comment-content">
									<form action="discussion.php?id=<?php echo $_GET["id"]; ?>&commentpage=<?php echo $_GET['commentpage']; ?>" method="post">
										<textarea id="comment" name="comment" placeholder="Post a comment"></textarea>
										<input type="submit" value="submit" name="submit" class="submit-btn">
									</form>
								</div>
							</div>
						</div>
					</div>
					<br><br><br>
				</div>
				<div class="col-lg-4">
					<?php 
						$query = "SELECT * FROM forum ORDER BY id DESC LIMIT 0, 20";
						$cat_set = mysqli_query($conn, $query);
						if (!$cat_set) {
							die('Failed');
						}
					?>
					<div class="category">
						<div class="category1-sub">
							<h4>Categories</h4>
						</div>
						<div class="category2-sub">
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