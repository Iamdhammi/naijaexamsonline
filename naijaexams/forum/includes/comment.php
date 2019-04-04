<?php require_once("login.php") ?>
<?php 
	
	if (isset($_POST['submit'])) {
		$comment = $_POST['comment'];
		$date = date("y-m-d");
		$time = date("h:i:sa");
		$topic_id = $_GET['id'];

		$query = "INSERT INTO comments (`comment`, `creator`, `date`, `topic_id`, `time` ) VALUES ('".$comment."', '".$_SESSION['email']."','".$date."', '".$topic_id."', '".$time."')";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die('query failed');
		}

	}

?>