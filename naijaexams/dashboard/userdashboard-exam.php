<?php include 'auth.php';?>
<?php
if (isset($_POST['add'])){
    extract($_POST);
    $subj = implode(',',$subj_list);
   $query = "UPDATE users SET subjects=CONCAT(subjects,',$subj') where id ='".$_SESSION['id']."' ";
   
    if(mysqli_query($conn , $query)){
      header('Location: userdashboard-exam.php');
    }
    else{
        $message = "Incorrect users";
    } 
}

if (isset($_GET['verifycode'])){
	extract($_GET);
	
	$query = "SELECT * FROM `payexams` where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
	$result = $conn->query($query);
	$ref = 0;
   
 
		if(mysqli_num_rows($result) > 0){
			while($row = $result->fetch_assoc()){
			  $ref = $row['nof'];
			}
			$ref = $ref - 1;
			if($ref == 3){
				//echo "<script>alert('You have used your code once you have 3 more trials')</script>";
				$sql = "UPDATE payexams SET nof='$ref' where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
				if ($conn->query($sql) === TRUE) {
					header('Location: user-exams.php?subj='.$subj.'&level='.$level);
				}
			}
			else if($ref == 2){
				// echo "<script>alert('You have used your code once you have 2 more trials')</script>";
				$sql = "UPDATE payexams SET nof='$ref' where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
				if ($conn->query($sql) === TRUE) {
					header('Location: user-exams.php?subj='.$subj.'&level='.$level);
				}
			}
			elseif($ref == 1){
				// echo "<script>alert('You have used your code thrice you have 1 more trials')</script>";
				$sql = "UPDATE payexams SET nof='$ref' where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
				if ($conn->query($sql) === TRUE) {
					header('Location: user-exams.php?subj='.$subj.'&level='.$level);
				}
			}
			elseif($ref == 0){
				// alert('')
				$sql = "DELETE from payexams where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
				if ($conn->query($sql) === TRUE) {
					header('Location: userdashboard-exam.php');
				}
			}
		}	
		else{
			//echo("Error description: " . mysqli_error($conn));
			$output = "Code not found";
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
							<a href="userdashboard-profile.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> My Profile
							</a>
						</li>
						<li>
							<a href="userdashboard-exam.php" class="active">
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

	<section style="margin-top: 70px;">
		<div class="container">
				<div class="row">
					<div class="col-lg-3" id="left-table">
						<table class="table table-hover">
						    <thead style="background-color: #ddd; color: black;">
						      <tr>
						        <th>MY <span style="color: #C33037;">EXAM</span></th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>Register for Courses</td>
						      </tr>
						      <tr>
						      	<td>Today's Exam</td>
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
								        <th style="color: #C33037;">TAKE COURSES</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>
								        	
													<?php 
													$subjects =  explode(',' ,$_SESSION['subjects']);

													

													foreach ($subjects as $key => $subj){

														$query = "SELECT subject FROM `admin`";
														$results = $conn->query($query);

														if(mysqli_num_rows($results) > 0){
															while($row = $results->fetch_assoc()){
																
																// print_r($subjects);
																if($row['subject'] == $subj){
																	echo '<ul>';
																	echo '<li><a href="#modal'.$key.'" data-toggle="modal">'.ucfirst($subj).'</a></li>';
														// form to input code here  
														echo '<li>OR -- Apply  code here ';
														?>
														<form action="">
															<input type="text" name="code">
															<input type="text" name="subj" value=<?php echo $subj?>  hidden>
															<input type="text" name="level" value=<?php echo $_SESSION['level']?> hidden >
															<button typpe="submit" name="verifycode">Apply</button>
														</form>

														<?php echo '</li>' ;?>

													    <div class="modal fade" id="modal<?php echo $key?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document">
																<div class="modal-content">
																<div class="modal-header">
																</div>
																<div class="modal-body">
																	<h4 style="color: black;">You will have to pay to continue.<br> Press Okay to proceed to payment portal.</h4>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" style="color: black; background-color: white; border-color: #5cb85c; font-size: 16px;" data-dismiss="modal">Close</button>
																	<button type="button" class="btn btn-secondary" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;"><a href="payment.php?subject=<?php echo $subj;?>">Okay</a></button>
																</div>
																</div>
															</div>
														</div>
												
												    <?php
													   
													}
												
													 echo '</ul>';
													 

														
														
																}
															}
														}
														if(isset($output)){
															echo $output;
														}
														else{
															echo '';
														}
														?>
													
								        </td>
								      </tr>
								    </tbody>
							 	</table>
							</div>
							<div class="col-lg-12">
								<table class="table table-hover">
								    <thead style="background-color: #ddd; color: black;">
								      <tr>
								        <th style="color: #C33037;">ADD NEW</th>
								      </tr>
								    </thead>
								    <tbody>
										<tr><td>
										<form method="post" action="#">
										<?php 
											$sql = "SELECT  * FROM `subjects`";
											$result = $conn->query($sql);
									
											if(mysqli_num_rows($result) > 0){
													while($row = $result->fetch_assoc()){
														if(!(in_array($row['subject'], $subjects))){	
																echo '<input type="checkbox" name="subj_list[]" value="'.$row['subject'].'" />' .ucfirst($row['subject']).'<br>' ;	
															}

															else{
																echo '';
															}	
														
														// echo '<input type="checkbox" name="'.$row['subject'].'" value="'.$row['subject'].'" />' .ucfirst($row['subject']).'<br>' ;	
													}
													echo '
													<button name ="add" type="submit" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px; margin-top: 50px;" class="btn btn-primary">
				                                        <span class="glyphicon glyphicon-list-alt"></span> Add
				                                    </button>
													';
											}
										?>
										  
								      </form>
											</td></tr>
								    </tbody>
							 	</table>
							</div>	
						</div>
					</div>
				</div>
			</div>
	</section>

	
	<!--copy-rights-->
	<div class="copyright" style="margin-top: 100px;">
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