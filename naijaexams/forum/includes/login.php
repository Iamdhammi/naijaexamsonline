<?php  session_start(); ?>
<?php 
	require ('../conn.php');
?>
<?php
	if (isset($_POST['loginForm'])){
	    extract($_POST);
		$pass = md5($password);

	   $query = "select * from users where email = '$email' and password = '$pass' and role = 'student' and active = 1";
	   $result = $conn->query($query);
	    if ($result->num_rows > 0)  {
			$_SESSION['email'] = $email;
			header('Location: ../dashboard/index.php');

		} else {
			echo '<script>alert("Incorrect password or Wrong Email")</script>' ;
		}
	}
?>