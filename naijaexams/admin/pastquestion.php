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

<link href="../css/style.css" rel="stylesheet" type="text/css">
<!--script-->

<script src="../js/jquery-1.11.0.min.js"></script>

<!-- js -->
<script src="../js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />

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


<?php
global $update;
 if(isset($_POST['addQuest'])){

    extract($_POST);
	$smallsubj = strtolower($subj);

    $file =$_FILES['file']['name'];

    $file_loc = $_FILES['file']['tmp_name'];

    $folder="../pastquestions/";

    $sql = "insert into pastquestion (category , subject , file , amount ) values('$cat' , '$smallsubj' , '$file' , '$amount')";
     
    
    // $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
    // mysql_query($sql);

	if(mysqli_query($conn , $sql)){
        move_uploaded_file($file_loc,$folder.$file);
		//header('Location: pastquestion.php');
		$update = 1;
	}
	else{
		echo("Error description: " . mysqli_error($conn));
	}
}
?>
    <?php
    //     if(isset($_POST['editSubj'])){
    //         $update = 0;
    //         extract($_POST);
    //         $smallsubj = strtolower($subj);
    //         $sql = "UPDATE subjects SET subject = '$smallsubj'  WHERE id = '$no'";

    //         if(mysqli_query($conn , $sql)){
    //             $update = 1;
    //             echo " <script>

    //       swal({
    //       title: 'You scored ',
    //      text : 'Thank you .You reached the pass mark'
    //      });

    // </script>";
    //         }
    //         else{
    //             echo("Error description: " . mysqli_error($conn));
    //         }
    //     }
    ?>

   <?php

if(isset($_GET['delete']) && $_GET['delete'] == 'true'){

  $sql = "delete from pastquestion WHERE id = '".$_GET['id']."' " ;

    if(mysqli_query($conn , $sql)){
            $update = 2;
    }
    else{
        echo("Error description: " . mysqli_error($conn));
    }
}
?>
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
				<ul class="nav navbar-nav navbar-right nav-user margin-top cl-effect-2">
					<li class="nav"><a><span class="glyphicon glyphicon-question-sign"></span></a></li>
					<li class="nav-user">
						<a style="font-size: 17px;" class="nav-user dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user" style="font-size: 20px;"></i> Admin <span class="caret"></span>
						</a>
						<div class="dropdown-menu" style="padding: 10px;">
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
		<nav class="navbar navbar-default" >
			<div class="container" id="dashboard">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0px;">
					<ul class="nav navbar-nav navbar-left margin-top" id="dashboard-links">
						<li>
							<a  href="index.php">
								<span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Dashboard
							</a>
						</li>
						<li >
							<a href="admin-subject.php">
								<span class="glyphicon glyphicon-edit" style="font-size: 15px;"></span> Subjects
							</a>
						</li>
						
						<li>
							<a href="admin-exam.php" >
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
							<a href="admin-user.php" class="active">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Past Question
							</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>
	<!-- header -->
   <?php  if($update == 1){ echo '
   			<section style="margin-top: 30px; text-align: center;">
				<div class="container">
					<div class="alert alert-success alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					    <strong>Past Question has been uploaded</strong>
					 </div>
				</div>
			</section>' ;
		}
		elseif($update == 2){
			echo '<section style="margin-top: 30px; text-align: center;">
				<div class="container">
					<div class="alert alert-success alert-dismissable">
					    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					    <strong>Past Question has been deleted</strong>
					 </div>
				</div>
			</section>' ;
		}
    ?>
   
	<section style="margin-top: 30px;">
		<div class="container">
			<div class="btn-group">
			    <a style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
			    	<span class="glyphicon glyphicon-list-alt"></span> Upload New Past Question
			    </a>
			    <!-- Modal -->
					  <div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title" style="color: black;">Add <span style="color: #C33037;"> Subject</span></h4>
					        </div>
					        <div class="modal-body">
					          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							    <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Subject</label>
							      <div class="col-sm-10">          
							        <input type="name" class="form-control" id="name" placeholder="Subject Name" name="subj">
							      </div>
								</div>
								<div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Category</label>
							      <div class="col-sm-10">          
							        <input type="name" class="form-control" id="name" placeholder="Subject Name" name="cat">
							      </div>
							    </div>
                                <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">File</label>
							      <div class="col-sm-10">          
							        <input type="file" class="form-control" id="name" placeholder="File" name="file">
							      </div>
							    </div>
                                <div class="form-group">
							      <label class="control-label col-sm-2" for="pwd">Amount</label>
							      <div class="col-sm-10">          
							        <input type="number" class="form-control" id="name" placeholder="Amount" name="amount">
							      </div>
							    </div>
							    <div class="form-group">        
							      <div class="col-sm-offset-2 col-sm-10">
							        <button type="submit" name="addQuest" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Save</button>
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

	<section style="margin-top: 30px;">
		<div class="container">
			<table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th><span style="color: #C33037;">SUBJECTS</span></th>
			      </tr>
			    </thead>
		 	 </table>
		 	 <table class="table table-hover">
			    <tbody>
			      <tr>
			        <td><strong>S/No.</strong></td>
					<td><strong>Subject Name</strong></td>
					<td><strong>Category</strong></td>
                    <td><strong>File</strong></td>
                    <td><strong>Amount</strong></td>
			        <td><strong>Action</strong></td>
			        
			      </tr>
				   <?php  
					 $sql = "SELECT * FROM `pastquestion`"; 
					 $result = $conn->query($sql);
					 if ($result->num_rows > 0) {
						 $i = 1;
						while($row = $result->fetch_assoc()) {										
							echo ' <tr><td>'.$i.'</td>';
							echo "<td>".ucfirst($row['subject'])."</td>";
							echo "<td>".ucfirst($row['category'])."</td>";
							echo "<td>".ucfirst($row['file'])."</td>";
							echo "<td>".ucfirst($row['amount'])."</td>";
							echo '<td>
							<div class="btn-group">
							  <a href="pastquestion.php?delete=true&id='.$row['id'].'" style="background-color: #d9534f; border-color: #d9534f; font-size: 16px; margin-right: 5px;" class="btn btn-primary">
								  <span class="glyphicon glyphicon-remove-circle"></span> Delete
							  </a>
						  </div>
						</td> </tr>';


						?>
                            <!-- <div class="modal fade" id="editModal<?php echo $i ;?>" role="dialog" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="height: 250px;">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title" style="color: black;">Add <span style="color: #C33037;"> Subject</span></h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="" method="post">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="pwd">Subject Name:</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="no" value="<?php echo $row['id'];?>">
                                                        <input type="name" class="form-control" id="name" placeholder="Subject Name" name="subj" value="<?php echo ucfirst($row['subject']);  ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" name="editSubj" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <?php
                            $i++;
						}
					}
					else{
						echo 'No subject yet';
					}
				   
				   ?>
				     
			      	
			     
			      
			    </tbody>
		 	</table>
		</div>
		
	</section>

	<!--footer-->
	<div class="footer" style="margin-top: 50px;">
			<!-- container -->
			<div class="container">
				<div class="col-md-6 footer-left">
					<ul>
						<li><a href="index.php">Home</a></li>
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
	<script type="text/javascript">
			$(document).ready(function() {
			
			$().UItoTop({ easingType: 'easeOutQuart' });
	});
	</script>
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->
		</div>
	<!--/copy-rights-->
</body>
</html>