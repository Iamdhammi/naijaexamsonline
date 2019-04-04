<?php include 'auth.php';?>

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
							<a href="userdashboard-exam.php" >
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> My Exams
							</a>
						</li>
						<li>
							<a href="userdashboard-result.php">
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> My Results
							</a>
						</li>
                        <li>
							<a href="pastquestion.php" class="active">
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
	<div class="container">
    <table class="table table-hover">
			    <thead style="background-color: #ddd; color: black;">
			      <tr>
			        <th><span style="color: #C33037;">Past Questions</span></th>
			      </tr>
			    </thead>
		 	 </table>
		 	 <table class="table table-hover">
			    <tbody>
			      <tr>
			        <td><strong>S/No.</strong></td>
			        <td><strong>Subject Name</strong></td>
                    <td><strong>File Name</strong></td>
                    <td><strong>Image</strong></td>
			        <td><strong>Amount</strong></td>
			      </tr>
				   <?php  
					 $sql = "SELECT * FROM `pastquestion`"; 
					 $result = $conn->query($sql);
					 if ($result->num_rows > 0) {
						 $i = 1;
						while($row = $result->fetch_assoc()) {	
                            $amount = $row['amount'];
                            $file = $row['file'];							
							echo ' <tr><td>'.$i.'</td>';
                            echo "<td>".ucfirst($row['subject'])."</td>";
                            echo "<td>".ucfirst($row['file'])."</td>";
                            echo "<td>".ucfirst($row['subject'])."</td>";
                            echo "<td>NGN".ucfirst($row['amount']).".00</td>";
                            echo '<td>';
                            ?>
							<form>
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                <button type="button" onclick="payWithPaystack()"> Buy</button> 
                            </form>
						</td> </tr>
                        <?php
                            $i++;
						}
					}
					else{
						echo 'No subject yet';
					}
				   
				   ?>

                     <script>
						
					</script>
			     
			      
			    </tbody>
		 	</table>
	</div>
	

	
 
	<script>
		function payWithPaystack(){
			var handler = PaystackPop.setup({
			key: 'pk_test_b54787f7a79d786fe7a52a55769950c1158ec65a',
			email: '<?php echo $_SESSION['email'] ?>',
			amount: '<?php echo $amount * 100; ?>',
			ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
			firstname: '<?php echo $_SESSION['fname'] ?>',
			lastname: '<?php echo $_SESSION['lname'] ?>',
			// label: "Optional string that replaces customer email"
			metadata: {
				custom_fields: [
					{
						display_name: '<?php echo $_SESSION['fname'] ?>',
						variable_name: "mobile_number",
						value: "+2348012345678"
					}
				]
			},
			callback: function(response){
				//alert('success. transaction ref is ' + response.reference);
				var pq = 
					{
					"reference" : response.reference,
					"amount" : '<?php echo $amount ; ?>',
                    "file" : '<?php echo $file ; ?>'

				}
				
				var pq_string = JSON.stringify(pq);
                 
				$.ajax({
					type: "POST",
					dataType: "json",
					url: "buy.php",
					// contentType: "application/json; charset=utf-8",
					data: {myData : pq_string},
					// success: function(data){
					// 	console.log(data);
						
					// },
					// error : function(e){
					// 	console.log(e);
					// 	window.location.href= 'processpayment.php';
					// }
					complete: function(jqXHR) {
						if(jqXHR.readyState === 4) {
							// document.cookie = "pq="+pq_string;
							<?php
								$query = "insert into records (email , file , reference , amount ) value('".$_SESSION['email']."' ,'$file', 'reference', '$amount' )";
								if(mysqli_query($conn , $query)){
							?>

							window.location.href = '../pastquestions/<?php echo $file ; ?>'
							<?php	
								}
							?>
							console.log(jqXHR);
						}  
						else{
							console.log('not done');
						}
					}       
				});
				//localStorage.setItem('details', JSON.stringify(details));
				
			},
			onClose: function(){
				//alert('window closed');
			}
			});
			handler.openIframe();
		}
	</script>

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