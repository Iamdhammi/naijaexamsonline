<?php include 'auth.php';?>
<?php 
$student  = array();
$sql = "SELECT * FROM `users` where role = 'student' ";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {										
				$student[] = $row;
			}

		}
		?>
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
<link rel="stylesheet" type="text/css" href="../css/default.css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<script src="../js/modernizr.custom.js"></script>
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

<script>
	window.onload = function() {

	var chart = new CanvasJS.Chart("chartContainer", {
	  animationEnabled: true,
	  title: {
	    text: ""
	  },
	  data: [{
	    type: "pie",
	    startAngle: 240,
	    yValueFormatString: "##0.00\"%\"",
	    indexLabel: "{label} {y}",
	    dataPoints: [
	      {y: 39.45, label: "Physics"},
	      {y: 7.31, label: "Chemistry"},
	      {y: 27.06, label: "English"},
	      {y: 24.91, label: "Mathematics"},
	      {y: 11.26, label: "Others"}
	    ]
	  }]
	});
	chart.render();

	}
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
							<a href="index.php" class="active">
								<span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Dashboard
							</a>
						</li>
						<li >
							<a href="admin-subject.php">
								<span class="glyphicon glyphicon-edit" style="font-size: 15px;"></span> Subjects
							</a>
						</li>
						<li>
							<a href="admin-exam.php">
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
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Past Questions
							</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<!-- header -->

	<section style="margin-top: 30px; text-align: center;">
		<div class="container">
			<div class="alert alert-success alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    <strong>You are logged in as an admin</strong>
			 </div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-3" id="left-table">
					<table class="table table-hover">
					    <thead style="background-color: #ddd; color: black;">
					      <tr>
					        <th>EXAM<span style="color: #C33037;"> STATISTIC</span></th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>In Progress: <span style="color: #C33037;">0</span></td>
					      </tr>
					      <tr>
					        <td>Upcoming: <span style="color: #C33037;">0</span></td>
					      </tr>
					      <tr>
					        <td>Completed: <span style="color: #C33037;">0</span></td>
					      </tr>
					    </tbody>
				 	 </table>
				</div>
				<div class="col-lg-9">
					<table class="table table-hover">
					    <thead style="background-color: #ddd; color: black;">
					      <tr>
					        <th> STUDENT <span style="color: #C33037;">STATISTIC TABLE</span></th>
					      </tr>
					    </thead>
					</table>
					<table class="table table-hover">
					    <tbody>
					      <tr>

					        <td><strong>Total Students</strong></td>
					        <td><strong>Total Subjects</strong></td>
					        <td><strong>Total </strong></td>
					      </tr>
					      <tr>
                              <td><strong><?php echo count($student);?></strong></td>
					      	<td><?php
                                $sql = "SELECT * FROM `subjects` ";
                                $result = $conn->query($sql);
                                if($result){
                                    $rowcount = mysqli_num_rows($result);
                                    echo $rowcount;
                                }
                                ?></td>
					      	<td>0</td>
					      </tr>
					    </tbody>
				 	</table>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-hover">
					    <thead style="background-color: #ddd; color: black;">
					      <tr>
					        <th>QUESTION BANK <span style="color: #C33037;">SUBJECT WISE</span></th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td><div id="chartContainer" style="height: 300px; width: 100%;"></div></td>
					      </tr>
					    </tbody>
				 	 </table>
					
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th>QUESTION <span style="color: #C33037;">COUNT TABLE</span></th>
			      </tr>
			    </thead>
		 	 </table>
		 	 <table class="table table-hover">
			    <tbody>
			      <tr>
			        <td><strong>Exam Name</strong></td>
			        <td><strong>Total Questions</strong></td>
			        <td><strong>Pass Mark</strong></td>
			        <td><strong>Level</strong></td>
			        <td><strong>Total Time</strong></td>
			      </tr>
                  <?php
                  $sql = "SELECT * FROM `admin`";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                          $question = explode(',' , $row['questions']);
                          echo "<tr>
                                 <td>".ucfirst($row['subject'])."</td>
                                 <td>".count($question)."</td>
                                 <td>".ucfirst($row['passmark'])."</td>
                                 <td>".ucfirst($row['level'])."</td>
                                 <td>".ucfirst($row['time'])."</td>
                            </tr>";
                      }

                  }

                  ?>
			    </tbody>
		 	</table>
		</div>
	</section>
	
	<!--copy-rights-->
	<div class="copyright" style="margin-top: 150px;">
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