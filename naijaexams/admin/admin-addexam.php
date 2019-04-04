<?php include 'auth.php';?>
<?php
$message = "";
		if(isset($_POST['noqSub'])){
			extract($_POST);

            $smallsubj = strtolower($subj);

            $sql = "SELECT * FROM `admin` where `subject` = '$smallsubj' and `level` = '$level' ";

            $result = $conn->query($sql);

            if(mysqli_num_rows($result) > 0 ){
                $message ='
                <section style="margin-top: 30px; text-align: center;">
					<div class="container">
						<div class="alert alert-success alert-dismissable">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
						    <strong>Subject for this particular level already exist</strong>
						</div>
					</div>
				</section>
                ';
            }
            else{
                $smallsubj = strtolower($subj);

                $query = "insert into admin (subject , questions ,options , answer ,level ,time , passmark) value('$smallsubj' , ''  , '' , '' , '$level' , '$duration' , '$passmark' )";

                if(mysqli_query($conn , $query)){
                    header('location: admin-addquestion.php?subj='.$subj.'&level='.$level.'&noq='.$noq);
                }
                else{
                    echo("Error description: " . mysqli_error($conn));
                }
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
<link rel="stylesheet" href="../css/font-awesome.css" type="text/css">
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
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
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
   <?php if(isset($message)){echo $message;} ?>
	<section style="margin-top: 30px;">
		<div class="container">
			<table class="table">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th>ADD <span style="color: #C33037;">EXAMS</span></th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>
			    			<div class="container" style="margin-top: 30px;">
							  <form method="post" action="">
			    				<div class="row">
			    					<div class="col-lg-6">
			    						
							  			  	<div class="form-group">
										      	<label class="control-label col-sm-4">Exam Name:</label>
										      	<div class="col-sm-8">
                                                    <?php
                                                    $sql = "SELECT * FROM `subjects`";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                             $subject = $row['subject'];
                                                            echo '
                                                            <div class="radio">
															  <label><input type="radio" value="'.$subject.'" name="subj"/>'.$subject.'</label>
															</div>';
                                                        }
                                                    }
                                                    ?>
										      	</div>
										   	</div>
									  	
			    					</div>
			    					<div class="col-lg-6">
							  			  	<div class="form-group">
										      	<label class="control-label col-sm-4">Passing Percent:</label>
										      	<div class="col-sm-8">          
										        	<input type="name" class="form-control" name="passmark" placeholder="Passing Percent">
										      	</div>
										   	</div>
									  	
			    					</div>
			    				</div>

			    				<div class="row" style="padding-top: 30px;">
			    					<div class="col-lg-6">
			    					
							  			  	<div class="form-group">
										      	<label class="control-label col-sm-4">Exam Duration:</label>
										      	<div class="col-sm-8">          
										        	<input type="number" class="form-control" name="duration" placeholder="Exam Duration(Mins)">
										      	</div>
										   	</div>
									  	
									</div>		
			    					<div class="col-lg-6" >
			    						
							  			  	<div class="form-group">
										      	<label class="control-label col-sm-4">Level</label>
										      	<div class="col-sm-8">          
										        	<input type="number" class="form-control" name="level" placeholder="Level">
										      	</div>
										   	</div>
									
										  
			    					</div>
								</div>
								<div class="row">
									<div class="col-lg-6" style="padding-top: 30px;">
										<div class="form-group">
										      	<label class="control-label col-sm-4">Number Of Questions</label>
										      	<div class="col-sm-8">          
										        	<input type="number" class="form-control" name="noq" placeholder="Number of Questions">
										      	</div>
										 </div>
									</div>
								</div>
								<div class="col-lg-12" style="padding-top: 100px;">
									<center>
										<button name ="noqSub" type="submit" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
									    	<span class="glyphicon glyphicon-list-alt"></span> Submit
									    </button>
									</center>
								</div>
							</form>
			    				
			    		</td>
			    	</tr>
			    </tbody>
		 	 </table>
		</div>
	</section>

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


