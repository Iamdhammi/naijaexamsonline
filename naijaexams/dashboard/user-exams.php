<?php include 'auth.php';?>
<?php require 'includes/header.php'; ?>
<body>
   <input type="" hidden value="return " />
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
							<i class="glyphicon glyphicon-user" style="font-size: 20px;"></i> User <span class="caret"></span>
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
		<!-- <nav class="navbar navbar-default">
			<div class="container" id="dashboard">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
				</div> -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding: 0px;">
					<ul class="nav navbar-nav navbar-left margin-top" id="dashboard-links">
						<li>
							<a style="border-right: 0.51px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard.php">
								<span class="glyphicon glyphicon-home" style="font-size: 15px;"></span> Dashboard
							</a>
						</li>
						<li >
							<a style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard-profile.php" >
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> My Profile
							</a>
						</li>
						<li>
							<a style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;" href="userdashboard-exam.php" class="active">
								<span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> My Exams
							</a>
						</li>
						<li>
							<a href="userdashboard-result.php" style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;">
								<span class="glyphicon glyphicon-asterisk" style="font-size: 15px;"></span> My Results
							</a>
						</li>
						<li>
							<a href="userdashboard-leaderboard.php" style="border-right: 0.1px solid #C33037; border-left: 0.1px solid #C33037;">
								<span class="glyphicon glyphicon-dashboard" style="font-size: 15px;"></span> Leaderboard
							</a>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div> -->
			</div>
		</nav>
	</header>
	<!-- header -->
	<section style="margin-top: 30px; text-align: center;">
		<div class="container">
			<div class="alert alert-success alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    <strong>There are 50 Questions </strong>
			 </div>
		</div>
	</section>

	<section style="margin-top: 20px;">
		<div class="container">
				<div >
					<div >
						<table class="table table-hover">
						    <thead style="background-color: #ddd; color: black;">
						      <tr>
								  
								<th><span style="color: #C33037;">TIME</span></th>
								<td><?php 
								  
								  if(isset($_GET['subj']) && isset($_GET['level']) ){
									  extract($_GET);
									  $sql = "SELECT * FROM `admin` where `subject` = '".$subj."' and level = '$level' ";
									  $result = $conn->query($sql);
									  
									//   while($row = $result->fetch_assoc()) {
									// 	$time = $row['time'];	
									//    }
									  $question = array();
									  $answers = array();
									  $options = array();

									  
								
								   ?></td>
								   
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
	 							<td><div class="clock" data-time = "<?php echo $time ;?>"></div></td>
						      </tr>
						    </tbody>
					 	 </table>
					</div>
					<div>
						<div class="row">
							<div class="col-lg-12">
								<table class="table table-hover">
								    <thead style="background-color: #ddd; color: black;">
								      <tr>
										<th style="color: #C33037;text-transform : uppercase">QUESTIONS - <?php echo $subj  ; ?></th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>
                                            
                                        <form method="post" action="process.php">
                                      
											<?php
											
											if (mysqli_num_rows($result)) {
										
												while($row = $result->fetch_assoc()) {
		
														$question = explode(',' , $row['questions']);
														$answers = explode(',' , $row['answer']);
														$options = explode(',' , $row['options']);
														$time = $row['time'];
														$level = $row['level'];
														$passmark = $row['passmark'];
													}
													
                                            $i = 0;

                                            while ($i < count($question)){
                                                echo '<ul style="list-style-type: square; font-size:20px;"><li style="padding:10px;">'.$question[$i].'</li></ul>';
                                                $v = ($i * 4) + 1;
                                                        
                                                while($v <= ($i + 1) * 4){
                                                    echo $v % 4;
                                                     echo '  <input data-count = "'.count($question).'" type="radio" name="ans['.$i.']" value="'.$options[$v-1].'" />'.$options[$v-1].'<br>' ;
                                                     $v++; 
                                                }
                                                $i++;
                                              }
                                         
                                            echo '<input hidden name="subj" value ="'.$subj.'"/>';
                                            echo '<input hidden name="level" value ="'.$level.'"/>';
											echo '<input hidden name="length" value ="'.count($question).'"/>';
											echo '<input hidden name="passmark" value ="'.$passmark.'"/>';
											/*echo '
											<div class="nextdiv"> 
                                            	<a href="#" class="previous round not-active"> &#8249; Previous</a>
                                            	<a href="#" class="next round">Next &#8250;</a> 
                                            </div>
											';*/
											echo '
											<button name ="questSub" type="submit" class="btn btn-primary submit-button">
		                                        <span class="glyphicon glyphicon-list-alt"></span>  Submit
		                                    </button>
											';
                                            echo '</form>';
											}

												else{
														echo "No question for this course yet";
												}
											} 
                                            ?>
                                            
                                            
								        </td>
								      </tr>
								    </tbody>
							 	</table>
							</div>
								
						</div>
					</div>
				</div>
			</div>
	</section>

	
	<!--copy-rights-->
	<div class="copyright" style="margin-top: 50px;">
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

<script type="text/javascript">
       
		
			
			
			var aDayInSecs = 24 * 60 * 60 ;
			var aHourInSecs = 60 * 60;
			var aMinuteInSecs = 60;
			var time = $('.clock').data('time'); 
			var count = $("input[type ='radio']").data('count');
			
			
			var studentAns = [];

			var clock = $('.clock').FlipClock({
		        clockFace: 'DailyCounter',
				autoStart: false,
				countdown: true,
		        callbacks: {
		        	stop: function() {
		        		$('.time').html('The clock has stopped!')
					},
					interval: function(){
						
						var time = clock.getTime().time;
						if (time < aDayInSecs) {
              				var $days = $("span.days").nextUntil("span").andSelf();
             				 if ($days.length > 0 ) $days.remove();  
						   }
						if (time < aHourInSecs) {
              				var $hours = $("span.hours").nextUntil("span").andSelf();
             				 if ($hours.length > 0 ) $hours.remove();  
						}
						if (time < aMinuteInSecs) {
              				var $minute = $("span.minutes").nextUntil("span").andSelf();
             				 if ($minute.length > 0 ) $hours.remove();  
						}
						if (time < 1) {
              				var $sec = $("span.seconds").next("ul").andSelf();
							if ($sec.length>0) $sec.remove(); 
							for( var i = 0 ; i < count ; i++ ){
								studentAns[i] = $("input[type='radio'][name='ans[" + i + "]']:checked").val()
							}
							// alert('Your time is up');
							// setTimeout(function () {
								$.ajax({
								url: './process.php',
								type: "post",
								data: {questSub : studentAns},
								// async: false,
								dataType: 'text',
								success: function(data){
									window.location.href = './process.php?subj=<?php echo $subj; ?>&level=<?php echo $level; ?>&length=<?php echo count($question) ; ?>&passmark=<?php echo $passmark ;?>';
									document.cookie = "studentAns="+studentAns;
								} 
							});
							// }, 4000)
							
                        }
					}
		        }
				
		    });
			
 
		    clock.setTime(3000);
		    clock.setCountdown(true);
		    clock.start();

		
	</script>
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->
		</div>
	<!--/copy-rights-->	
</body>
</html>