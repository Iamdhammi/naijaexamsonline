<?php include 'auth.php';?>
<?php require 'includes/header.php'; ?>
<body>

<?php
	$sql = "SELECT * FROM `student` where `user_id` = '".$_SESSION['id']."' ";
		$result = $conn->query($sql);
		

	?>
<script>
	window.onload = function() {

	var chart = new CanvasJS.Chart("chartContainer", {
		theme:"light2",
		animationEnabled: true,
		title:{
			text: "My Performance"
		},
		axisY :{
			includeZero: false,
			title: "Grades",
			suffix: "%"
		},
		toolTip: {
			shared: "true"
		},
		legend:{
			cursor:"pointer",
			itemclick : toggleDataSeries
		},
		data: [
		{
			type: "spline", 
			showInLegend: true,
			yValueFormatString: "#.00",
			name: "Exam",
			dataPoints: [
				<?php
					if(mysqli_num_rows($result)){
					    while($row = $result->fetch_assoc()){
								$subject = $row['subject'];	
								echo "{ label:"."'$subject'".", y:". $row['score']." },";
							}
						}
						else{
							$subjects =  explode(',' ,$_SESSION['subjects']);
							foreach( $subjects as $subj){
								echo "{ label:"."'$subj'".", y:0 },";
							}
					    }
				?>
			    ]
		}]
	});
	chart.render();

	function toggleDataSeries(e) {
		if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible ){
			e.dataSeries.visible = false;
		} else {
			e.dataSeries.visible = true;
		}
		chart.render();
	}

	}
</script>


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
							<a href="userdashboard-result.php">
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> My Results
							</a>
						</li>
						<li>
							<a href="pastquestion.php">
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Past Questions
							</a>
						</li>
						<li>
							<a href="../forum/forum_user.php?page=1">
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> Forum
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
			    <strong>Thank you for logging in!</strong>
			 </div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-3" id="left-table">
					<div class="col-lg-12">

					
											<?php if ($_SESSION['image'] != "" ){ 
												    
												   echo  "<img src='../images/".$_SESSION['image']."' class='img__size'>" ;
												}
												else{ 
													echo "<img src='../images/avatar.png' class='img__size'>" ;
												} 
											?>
					</div>
					<table class="table table-hover">
					    <thead style="background-color: #ddd; color: black;">
					      <tr>
					        <th>MY <span style="color: #C33037;">EXAM STATS</span></th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>Registered Subjects : <span style="color: #C33037;"><?php $subject = explode(',',$_SESSION['subjects']); echo count($subject);?></span></td>
					      </tr>
					      <tr>
					        <td>Best Score in :
                               <?php $sql = "SELECT MAX(score) AS maxscore FROM student where user_id = '".$_SESSION['id']."'" ;

                               $result = $conn->query($sql);
                               if(mysqli_num_rows($result) > 0){
                                   while($row = $result->fetch_assoc()){
                                       echo $row['maxscore'];
                                   }
                               }
                               ?>
                            </td>
					      </tr>
					      <tr>
					        <td>Level : <span style="color: #C33037;"><?php echo $_SESSION['level']?></span></td>
					      </tr>
					    </tbody>
				 	 </table>
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
						<table class="table table-hover">
						    <thead style="background-color: #ddd; color: black;">
						      <tr>
						        <th style="color: #C33037;">DASHBOARD</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td><div id="chartContainer" style="height: 400px; width: 100%;"></div></td>
						      </tr>
						    </tbody>
					 	 </table>
					</div>
					<div class="col-lg-12">
						<col-md-6>
							<table class="table table-hover">
								<thead style="background-color: #ddd; color: black;">
								<tr>
									<th>WEAC <span style="color: #C33037;">EXAMS</span></th>
								</tr>
								</thead>
								<tbody>
									<tr>
									<td>
												<?php 
														// $subjects =  explode(',' ,$_SESSION['subjects']);
														// echo '<ul>';
														// foreach( $subjects as $subj){
														// 	echo '<li>'. ucfirst($subj).'</li>';
														// }
														// echo '</ul>';
														?>
									<ul>
										<li><a href="waec/biology.php">Biology</a></li>
										<li><a href="waec/maths.php">Maths</a></li>
										<li><a href="waec/govt.php">Government</a></li>
										<li><a href="waec/econs.php">Economics</a></li>
										<li><a href="waec/comm.php">Commerce</a></li>
										<li><a href="waec/physics.php">Physics</a></li>
										<li><a href="waec/geo.php">Geography</a></li>
										<li><a href="waec/agric.php">Agric Science</a></li>
										<li><a href="waec/chem.php">Chemistry</a></li>
										<li><a href="waec/fin.php">Financial Accounts</a></li>
									</ul>
										
										
									</td>
									
									</tr>
								</tbody>
							</table>
						</col-md-6>
						<col-md-6>
							<table class="table table-hover">
								<thead style="background-color: #ddd; color: black;">
								<tr>
									<th>REGISTERED <span style="color: #C33037;">COURSES</span></th>
								</tr>
								</thead>
								<tbody>
									<tr>
									<td>
										<ul>
											<li><a href="jamb/biology.php">Biology</a></li>
											<!-- <li><a href="jamb/maths.php">Maths</a></li> -->
											<li><a href="jamb/govt.php">Government</a></li>
											<li><a href="jamb/econs.php">Economics</a></li>
											<!-- <li><a href="jamb/comm.php">Commerce</a></li> -->
											<li><a href="jamb/physics.php">Physics</a></li>
											<li><a href="jamb/geo.php">Geography</a></li>
											<!-- <li><a href="jamb/agric.php">Agric Science</a></li> -->
											<li><a href="jamb/chem.php">Chemistry</a></li>
											<!-- <li><a href="jamb/fin.php">Financial Accounts</a></li> -->
										</ul>
									</td>
									
								</tbody>
							</table>
						</col-md-6>
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--copy-rights-->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6">
				
				
			</div>
			
			<!-- <div class="clearfix"> </div>	 -->

			<div class="col-md-6">
					<!-- hitwebcounter Code START -->
				<a href="http://www.hitwebcounter.com" target="_blank">
				<img src="http://hitwebcounter.com/counter/counter.php?page=6977653&style=0009&nbdigits=4&type=ip&initCount=0" title="Counter for tumblr" Alt="Counter for tumblr"   border="0" >
				</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="" 
                                        target="_blank" style="font-family: ; 
                                        font-size: px; color: #; text-decoration:  ;">                                       </>
                                        </a>   
			</div>
		</div>
		
		<!-- //container -->
	</div>
<!--/footer-->
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



<script src="../js/canvasjs.min.js"></script>
</body>
</html>