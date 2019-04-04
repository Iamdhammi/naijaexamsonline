<?php include 'auth.php';?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
</head>
<body>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>

<?php 
    if (isset($_POST['questSub']) || isset($_COOKIE['studentAns'])){
	  
        extract($_POST);
        extract($_GET);
        $correctAns = array();
        $sql = "SELECT  answer FROM `admin` where `subject` = '".$subj."' and level = '$level' ";
        $result = $conn->query($sql);

        $i = 0 ;
        if($result){
            while($row = $result->fetch_assoc()){
                $correctAns = explode(',' ,$row['answer']);
            }
        }
      
        $studAns = array();
        $studAnsTime = explode(',' , $_COOKIE['studentAns']);
       
		
            while($i < $length){
                $studAns[$i] = isset($_POST['questSub']) ? $_POST['ans'][$i] : $studAnsTime[$i] ;
                $i++;
            }
    
        $pass = 0;
        $fail = 0;
        
        for($i = 0 ; $i < count($studAns); $i++){
          
            if( $correctAns[$i] == $studAns[$i] ){
                $pass+=1;
            }
            else { 
              $fail+=1;
            }
        }
        $score = ($pass/$length) * 100;
        ( $score >= $passmark) ? ($staus= true) : ($staus = false);

        $sql = "SELECT * FROM `student` where `user_id` = '".$_SESSION['id']."' and level = '$level' and subject = '$subj'";
        $result = $conn->query($sql);

        if(mysqli_num_rows($result) > 0 ){
            
            $query = "update student SET score='$score', status='$staus' where `user_id` = '".$_SESSION['id']."' and level = '$level' and subject = '$subj'";
            if(mysqli_query($conn , $query)){
                
            }
            else{
                echo("Error description: " . mysqli_error($conn));
            }
        }
        else{
            $query = "insert into student (user_id , level ,subject , score , status) value('".$_SESSION['id']."' , '$level'  ,'$subj','$score', '$staus')";
		
            if(mysqli_query($conn , $query)){
            
            }
            else{
                echo("Error description: " . mysqli_error($conn));
            }
        }

        

      echo " <script>

      swal({
      title: 'You scored $pass/$length!',"
    ;
    if ($score >= $passmark) {
        echo 'text : "Thank you .You reached the pass mark"';
    }
    else{
       
       echo 'text : "Thank you . You did not reach the pass mark"';
    }

      
   echo "  });

</script>";
        
	}
?>
<script>
    $('.confirm').click(function(){
        window.location.href = 'index.php'
    })
</script>



</body>
</html>

