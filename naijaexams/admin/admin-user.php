<?php include 'auth.php';?>
<?php 
$student  = array();
$sql = "SELECT * FROM `users` where role='admin' ";
		$result = $conn->query($sql);
	
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {										
				$admin[] = $row;
			}
		}
	
	if (isset($_POST['addAdmin'])){
			extract($_POST);
			$pass = md5($password);
			$imagename = $_FILES["myimage"]["name"]; 
		$target = "../images/".basename($imagename);
	
			if($password == $rpassword){
			$query = "insert into users (firstname , lastname ,subjects , email ,phone ,password , gender , logged , role ,level,image) value('$firstname' , '$lastname'  , '' , '$email' , '$phone' , '$pass' , '$gender' , 0  , 'admin' ,0 ,'$imagename')";
			
				if(mysqli_query($conn , $query)){
						move_uploaded_file($_FILES['myimage']['tmp_name'], $target);
						header('location: admin-user.php');
						
				}
				else{
					echo("Error description: " . mysqli_error($conn));
				}
			}
			else{
				$message = "Password do not match";
			}

	}

if(isset($_POST['editAdmin'])){
		extract($_POST);
		// echo $_FILES["myimage"]["name"];
		if(empty($_FILES["myimage"]["name"])){
			echo 'hello';
			$sql = "UPDATE users SET firstname='$firstname' , lastname = '$lastname' , email = '$email' , phone = '$phone'  WHERE email = '$email'";

				if ($conn->query($sql) === TRUE) {
					// header('location: admin-user.php');
						echo "<script>profile updated successfully</script>";
				} else {
						echo "Error updating profile: " . $conn->error;
				}
		}
		else{
			
            $imagename = $_FILES["myimage"]["name"];
            $target = "../images/".basename($imagename);
            echo 'y';

			$sql = "UPDATE users SET firstname='$firstname' , lastname = '$lastname' , email = '$email' , phone = '$phone', image ='$imagename'   WHERE email = '$email'";

				if ($conn->query($sql) === TRUE) {
					// header('location: admin-user.php');
						echo "<script>profile updated successfully</script>";
				} else {
						echo "Error updating profile: " . $conn->error;
				}
		}
		
}
  		
  	
?>
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
<link rel="stylesheet" href="..././css/font-awesome.css" type="text/css">
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="../css/default.css" />
<link rel="stylesheet" type="text/css" href="../css/component.css" />
<script src="../js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
							<a href="admin-user.php" class="active">
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
	<!-- ADD NEW ADMIN -->
    <?php

    if(isset($_GET['delete']) && $_GET['delete'] == 'true'){

        $sql = "delete from users WHERE id = '".$_GET['id']."' " ;

        if(mysqli_query($conn , $sql)){
            echo 'This user has been deleted';
        }
        else{
            echo("Error description: " . mysqli_error($conn));
        }
    }
    ?>

	<section style="margin-top: 30px;">
		<div class="container">
			<div class="btn-group">
				<a  style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
			    	<span class="glyphicon glyphicon-plus"></span> Add New Admin
			    </a>
			    	<!-- Modal -->
					  <div class="modal fade" id="addModal" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title" style="color: black;">Add <span style="color: #C33037;"> Admin</span></h4>
					        </div>
					        <div class="modal-body">
					      <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">First Name</label>
							      <div class="col-sm-10">          
							        <input type="name" placeholder="Enter First Name" class="form-control" placeholder="Enter Full Name" name="firstname">
							      </div>
							    </div>
									<div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Last Name</label>
							      <div class="col-sm-10">          
							        <input type="name" class="form-control" placeholder="Enter last Name" name="lastname">
							      </div>
							    </div>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Email:</label>
							      <div class="col-sm-10">          
							        <input type="email" class="form-control" placeholder="Enter Email" name="email">
							      </div>
							    </div>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Phone No.:</label>
							      <div class="col-sm-10">          
							        <input type="number" class="form-control" id="phone" placeholder="Enter Phone No." name="phone">
							      </div>
							    </div>
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Password:</label>
							      <div class="col-sm-10">          
							        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
							      </div>
							    </div>
									<div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Password:</label>
							      <div class="col-sm-10">          
							        <input type="password" class="form-control" id="rpwd" placeholder="Enter password" name="rpassword">
							      </div>
							    </div>
									<div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Gender</label>
							      <div class="col-sm-10">          
							        <label class="w3layouts">
												<input type="radio" name="gender" id="hire" value="male" checked>Male
											</label>
											<label class="w3layouts label2">
												<input type="radio" name="gender" id="work" value="female">Female
											</label>
							      </div>
							    </div>
									<div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Image</label>
							      <div class="col-sm-10">          
										<input type="file" name="myimage">
							      </div>
							    </div>
							    <div class="form-group">        
							      <div class="col-sm-offset-2 col-sm-10">
							        <button type="submit" name="addAdmin" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Save</button>
							      </div>
							    </div>
							  </form>
					        </div>
					      </div>
					    </div>
					  </div>
			    
			</div>
		</div>
	</section>





	<!-- SeCTION -->

	<section style="margin-top: 30px;">
		<div class="container">
			<table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th><span style="color: #C33037;">USERS</span></th>
			      </tr>
			    </thead>
		 	 </table>
		 	 <table class="table table-hover">
			    <tbody>
			      <tr>
			        <td><strong>S/No.</strong></td>
			        <td><strong>Name</strong></td>
			        <td><strong>Email</strong></td>
			        <td><strong>Phone</strong></td>
							<td><strong>Role</strong></td>
			      </tr>
                  <?php
						$i=0;
						while( $i < count($admin)) {
						    echo '<tr>
                                <td>'.$i.'</td>
                                <td>' . $admin[$i]['firstname'].' ' . $admin[$i]['lastname'] . '</td>
                                <td>'.$admin[$i]['email'].'</td>
                                <td>'. $admin[$i]['phone'].'</td>
                                <td>'. $admin[$i]['role'].'</td>
                             
                              <td>
                                <a href="admin-edit.php?id='.$admin[$i]['id'].'" style="background-color: #f0ad4e; border-color: #f0ad4e; font-size: 16px;" class="btn btn-primary">
                                     <span class="glyphicon glyphicon-edit" ></span> Edit
                                    </a>
                                    <a href="admin-user.php?delete=true&id='.$admin[$i]['id'].'" style="background-color: #d9534f; border-color: #d9534f; font-size: 16px;" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-remove-circle" onclick="delete()"></span> Delete
                                    </a> 
                                </td>
                            </tr>  ';

				        $i++;
						}
								
			 ?>
			    </tbody>
		 	</table>
		</div>
		
	</section>


		<!-- EDIT ADMIN -->




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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script> 
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