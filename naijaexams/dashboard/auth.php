<?php
  session_start();
  
	if(!isset($_SESSION['email']))
	{
		header("Location:./");
		exit;
	}
	
	//GetAllData

	 require('conn.php');
   try{
		$sql = "SELECT * FROM `users` where `email` = '".$_SESSION['email']."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
 		   // output data of each row
  		
  		    while($row = $result->fetch_assoc()) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['fname'] = $row['firstname'];
                $_SESSION['lname'] = $row['lastname'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['subjects'] = $row['subjects'];
                $_SESSION['level'] = $row['level'];
                $_SESSION['image'] = $row['image'];
   			 }
		}
			 
			 $sql = "SELECT * FROM `student` where `user_id` = '".$_SESSION['id']."'";

			 $result = $conn->query($sql);
			 
			 if ($result->num_rows > 0) {
					 // output data of each row
				 
				 while($row = $result->fetch_assoc()) {
								// $_SESSION['subjects'] = $row[''];    
						 }
					}
				 
    }
    catch(PDOException $e){
      session_destroy();
      session_unset();
      exit;
    }
