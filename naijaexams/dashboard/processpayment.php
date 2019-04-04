<?php include 'auth.php';?>
<?php
if (isset($_COOKIE['details'])){
    $obj = (array) json_decode($_COOKIE['details'] , true);
    
  $subj = $obj['subject'];
  $code = $obj['code'];
  $level = $_SESSION['level'];
  $nof = 4;
  
  // Insert into database 
  $query = "SELECT * FROM `payexams` where `user_id` = '".$_SESSION['id']."' and `code` = '$code' and `subject` = '$subj' and `level` = '$level' ";
  $result = $conn->query($query);

  if(mysqli_num_rows($result) > 0){
     $sql = "UPDATE payexams SET code = '$code' and nof = '$nof' where `user_id` = '".$_SESSION['id']."' and `subject` = '$subj' and `level` = '$level' ";
    if ($conn->query($sql) === TRUE) {
            // Send code to email
            $to = $_SESSION['email']; 
            $subject = 'Code |';
            $message = '
              Thanks for using naijaexams!
            Your new code has been generated, you can use this code only 4 times after you will be asked to pay again.
            _This is your code below

            ------------------------
            Code: '.$code.'
            Subject: '.ucfirst($subj).'
            ------------------------

            Thank you.

            '; 
                            
            $headers = 'From:noreply@naijaexamonline.com' . "\r\n"; // Set from headers
            mail($to, $subj, $message, $headers); // Send our email	

            // say code has been sent

            // move to exam page 
            // echo $subj .' '.$level;
            header('location: user-exams.php?subj='.$subj.'&level='.$level);
      }
    
  }
  else{
    $query = "insert into payexams (user_id , subject , code , nof , level ) value('".$_SESSION['id']."' ,'$subj', '$code', '$nof' , '".$_SESSION['level']."' )";

          //$nof : number of reference time

          if(mysqli_query($conn , $query)){

            // Send code to email
            $to = $_SESSION['email']; 
            $subject = 'Code |';
            $message = '
              Thanks for using naijaexams!
            Your code has been generated, you can use this code only 4 times after you will be asked to pay again.
            _This is your code below

            ------------------------
            Code: '.$code.'
            Subject: '.ucfirst($subj).'
            ------------------------

            Thank you.

            '; 
                            
            $headers = 'From:noreply@naijaexamonline.com' . "\r\n"; // Set from headers
            mail($to, $subj, $message, $headers); // Send our email	

            // say code has been sent

            // move to exam page 
            // echo $subj .' '.$level;
            header('location: user-exams.php?subj='.$subj.'&level='.$level);
          }
  }
}
else{
  echo("Error description: " . mysqli_error($conn));
}
?>