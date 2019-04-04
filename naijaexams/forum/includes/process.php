<?php require_once("login.php") ?>
<?php
	$warning = "";
	if (isset($_POST['submit'])) {
		$topic = $_POST['topic'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$date = date("y-m-d");
		$time = date("h:i:sa");

		if ($topic && $category && $description != "") {
			$query = "INSERT INTO forum (`topic_name`, `category`, `topic_content`, `date`, `topic_creator`,`time`) VALUES ('".$topic."', '".$category."', '".$description."', '".$date."', '".$_SESSION['email']."', '".$time."')";

			$result = mysqli_query($conn, $query); 

			if (!$result) {
				die("Query Failed");
			}else {
				echo " <section style=\"margin-top: 30px; text-align: center;\">
							<div class=\"container\">
								<div class=\"alert alert-success alert-dismissable\">
								    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
								    <strong>Topic Successfully Added</strong>
								 </div>
							</div>
						</section>
					";
			}
		}else {
			$warning = "***Please Fill***";
		}

	/*	echo "
			<section style=\"margin-top: 30px; text-align: center;\">
				<div class=\"container\">
					<div class=\"alert alert-success alert-dismissable\">
					    <a href=\"#\" class=\"close\" data-dismiss="\alert\" aria-label=\"close\">×</a>
					    <strong>Topic Successfully Added</strong>
					 </div>
				</div>
			</section>
		"; */
	}






 ?>