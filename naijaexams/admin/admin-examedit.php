<?php include 'auth.php';?>
<?php
if(isset($_POST['editQuest'])){
    extract($_POST);
    $quest = implode(',',$quest_list);
    $options = implode(',',$option_list);
    $answer = implode(',',$ans);
    $smallsubj = strtolower($subj);

    $sql = "UPDATE admin SET subject = '$smallsubj' ,  questions='$quest' , options = '$options' , answer = '$answer' , level ='$level' , time = '$time' , passmark = '$passmark' WHERE id = '$id'";

    if(mysqli_query($conn , $sql)){
        header('location: admin-exam.php?message=1');
    }
    else{
        echo("Error description: " . mysqli_error($conn));
    }
}
?>

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
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <!--script-->
    <script src="../js/jquery-1.11.0.min.js"></script>
    <!-- js -->
    <script src="../js/bootstrap.js"></script>
    <!-- /js -->
    <!--fonts-->
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
    <!--/script-->

</head>
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
   
</header>
<!-- header -->

<section style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="left-table">
                <table class="table table-hover">
                    <thead style="background-color: #ddd; color: black;">
                    <tr>

                        <th><span style="color: #C33037;">QUESTIONS</span></th></tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <?php

                            if(isset($_GET['id'])) {
                                extract($_GET);

                                $sql = "SELECT * FROM `admin` where `id` = '" . $id . "' ";
                                $result = $conn->query($sql);


                                $question = array();
                                $answers = array();
                                $options = array();

                                if (mysqli_num_rows($result) > 0) {

                                    while($row = $result->fetch_assoc()) {

                                        $question = explode(',' , $row['questions']);
                                        $answers = explode(',' , $row['answer']);
                                        $options = explode(',' , $row['options']);
                                        $id = $row['id'];
                                        $time = $row['time'];
                                        $level = $row['level'];
                                        $passmark = $row['passmark'];
                                        $subj = $row['subject'];
                                    }

                                    $i = 0;
                                    echo '<form action="" method="post">';
                                    echo 'Subject : '.ucfirst($subj);
                                    echo ' Time : <input type="number" style="padding:5px;margin:0px 5px;" value="'.$time.'" name="time">';
                                    echo ' Level : <input type="number" style="padding:5px;margin:0px 5px;" value="'.$level.'" name="level">';
                                    echo ' Passmark : <input type="number" style="padding:5px;margin:0px 5px;" value="'.$passmark.'" name="passmark"><br>';

                                    while ($i < count($question)){
                                        echo 'Question<input  style="padding:5px;margin:15px 5px;width:70%" value="'.$question[$i].'" name="quest_list[]" type="text"/><br>';
                                        $v = ($i * 4) + 1;

                                        while($v <= ($i + 1) * 4){
                                            echo "option".$v ;
                                            echo '  <input style="padding:5px;margin:15px 5px;width:70%" type="text" name="option_list[]" value="'.$options[$v-1].'" /><br>' ;
                                            $v++;
                                        }
                                        echo 'Answer  <input style="padding:5px;margin:15px 5px;width:70%" type="text" name="ans[]" value="'.$answers[$i].'" /><br>' ;
                                        $i++;
                                    }

                                    echo '<input type="hidden" value="'.$id.'" name="id">';
                                    echo '<input type="hidden" value="'.$subj.'" name="subj">';
                                    echo '
                                    <button name ="editQuest" type="submit" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px; margin-top: 50px;" class="btn btn-primary">
                                        <span class="glyphicon glyphicon-list-alt"></span> Save
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
</section>

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