<?php include 'auth.php';?>
<!doctype html>
<html>
<head>
<title>Education Tutorial a Educational Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="../js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="../js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script src="../js/canvasjs.min.js"></script>
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
<!--/script-->

</head>
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
							<a href="admin-subject.php">
								<span class="glyphicon glyphicon-edit" style="font-size: 15px;"></span> Subjects
							</a>
						</li>
						<li>
							<a href="admin-exam.php" class="active">
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Exams
							</a>
						</li>
						<li>
							<a href="admin-student.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Students
							</a>
						</li>
						<li>
							<a href="admin-user.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Admin
							</a>
						</li>
						<li>
							<a href="pastquestion.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Past Questionss
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

    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){

        $sql = "delete from admin WHERE id = '".$_GET['id']."' " ;

        if(mysqli_query($conn , $sql)){
            echo '
            <section style="margin-top: 30px; text-align: center;">
				<div class="container">
					<div class="alert alert-success alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					    <strong>The Exam has been deleted</strong>
					 </div>
				</div>
			</section>
            ';
        }
        else{
            echo("Error description: " . mysqli_error($conn));
        }
    }
    if( isset($_GET['message']) && $_GET['message'] == 1){
        echo '
        <section style="margin-top: 30px; text-align: center;">
				<div class="container">
					<div class="alert alert-success alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					    <strong>The Exam has been updated</strong>
					 </div>
				</div>
			</section>
        ' ;
    }
    ?>

	<section style="margin-top: 30px;">
		<div class="container">
			<div class="btn-group">
				<a href="admin-addexam.php" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary">
			    	<span class="glyphicon glyphicon-plus"></span> Add New Exam
			    </a>
			    <!-- <a href="#" style="background-color: #f0ad4e; border-color: #f0ad4e; font-size: 16px;" class="btn btn-primary">
			    	<span class="glyphicon glyphicon-edit"></span> Edit
			    </a>
			    <a href="#" style="background-color: #d9534f; border-color: #d9534f; font-size: 16px;" class="btn btn-primary">
			    	<span class="glyphicon glyphicon-remove-circle"></span> Delete
				</a> -->
			</div>
		</div>
	</section>

	<section style="margin-top: 30px;">
		<div class="container">
			<table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th><span style="color: #C33037;">EXAMS</span></th>
			      </tr>
			    </thead>
		 	 </table>
		 	 <table class="table table-hover">
			    <tbody>
			      <tr>
			        <td><strong>S/No.</strong></td>
			        <td><strong>Exam Name</strong></td>
			        <td><strong>Duration</strong></td>
			        <td><strong>Level</strong></td>
			        <td><strong>Action</strong></td>
			      </tr>
			      <!-- <tr>
			      	<td>1</td>
			      	<td>Physics</td>
			      	<td>50 Mins.</td>
			      	<td>Active</td>
			      	<td>
			      		<div class="btn-group">
						    <a href="#" style="background-color: #f0ad4e; border-color: #f0ad4e; font-size: 15px; margin-right: 5px;" class="btn btn-primary">
						    	<span class="glyphicon glyphicon-edit"></span> Edit
						    </a>
						    <a href="#" style="background-color: #d9534f; border-color: #d9534f; font-size: 15px; margin-right: 5px;" class="btn btn-primary">
						    	<span class="glyphicon glyphicon-remove-circle"></span> Delete
							</a>
						</div>
			      	</td>
			      </tr>
			      <tr> -->
					<?php 
					$query = "select * from admin ";
							$result = $conn->query($query);
								$result;
								$r = 1;
								if ($result->num_rows > 0) {
									while($row = $result->fetch_assoc()) {
										echo '<tr>
										<td>'. $r++.'</td>
										<td>'.ucfirst($row['subject']).'</td>
										<td>'.$row['time'].'Mins</td>
										<td>'.$row['level'].'</td>
										<td>
											<div class="btn-group">
											  <a href="admin-examedit.php?id='.$row['id'].'" style="background-color: #f0ad4e; border-color: #f0ad4e; font-size: 15px; margin-right: 5px;" class="btn btn-primary">
												  <span class="glyphicon glyphicon-edit"></span> Edit
											  </a>
											  <a href="admin-exam.php?delete=true&id='.$row['id'].'" style="background-color: #d9534f; border-color: #d9534f; font-size: 15px; margin-right: 5px;" class="btn btn-primary">
												  <span class="glyphicon glyphicon-remove-circle"></span> Delete
											  </a>
										  </div>
										</td>
									</tr>
									<tr>' ; 
									}

								} else {
									echo "0 results";
								}
							?>
			    </tbody>
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