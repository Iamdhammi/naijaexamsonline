<?php include 'auth.php';?>
<?php
if(isset($_POST['editAdmin'])){
    extract($_POST);
    $imagename = $_FILES["myimage"]["name"];
    $target = "../images/".basename($imagename);


    $sql = "UPDATE users SET firstname='$firstname' , lastname = '$lastname' , email = '$email' , phone = '$phone', image ='$imagename'   WHERE email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "updated successfully";
    }
    else {
            echo "Error updating profile: " . $conn->error;
    }


}


?>
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
    <link rel="stylesheet" href="..././css/font-awesome.css" type="text/css">
    <!--/fonts-->
    <!--hover-girds-->
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <script src="../js/modernizr.custom.js"></script>
    <!--/hover-grids-->
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
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
                            <a href="admin-subject.php">
                                <span class="glyphicon glyphicon-edit" style="font-size: 15px;"></span> Subjects
                            </a>
                        </li>
                        <li>
                            <a href="admin-exam.php">
                                <span class="glyphicon glyphicon-book" style="font-size: 15px;"></span> Exams
                            </a>
                        </li>
                        <li>
                            <a href="admin-student.php">
                                <span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Students
                            </a>
                        </li>
                        <li>
                            <a href="admin-user.php" class="active">
                                <span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Admin
                            </a>
                        </li>
                        <li>
							<a href="pastquestion.php">
								<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span> Past Questions
							</a>
						</li>
                    </ul>
                    <div class="clearfix"> </div>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>
    <!-- header -->



<!-- SeCTION -->

<section style="margin-top: 30px;">
    <div class="container">
        <table class="table table-hover">
            <thead style="background-color: #ddd; color: black;">
            <tr>
                <th><span style="color: #C33037;">USERS</span></th>
            </tr>
            </thead>
        </table>
        <table class="table table-hover">
            <tbody>

            <?php
            if(isset($_GET['id'])){
                extract($_GET);
                $sql = "SELECT * FROM `users` where id='$id' ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
             ?>
                        <section style="margin-top: 30px;">
                            <div class="container">
                                <div class="btn-group">
                                    <!-- Modal -->
                                    <div >
                                        <div >
                                            <div class="">

                                                <div class="">
                                                    <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                                        <div class="form-group" style="padding: 30px;">
                                                            <label class="control-label col-sm-4">First Name</label>
                                                            <div class="col-sm-8">
                                                                <input type="name" placeholder="Enter First Name" class="form-control" name="firstname" value="<?php echo $row['firstname'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding: 30px;">
                                                            <label class="control-label col-lg-4">Last Name</label>
                                                            <div class="col-lg-8">
                                                                <input type="name" class="form-control" placeholder="Enter last Name" name="lastname" value="<?php echo $row['lastname'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding: 30px;">
                                                            <label class="control-label col-lg-4">Email:</label>
                                                            <div class="col-lg-8">
                                                                <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $row['email'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding: 30px;">
                                                            <label class="control-label col-lg-4">Phone No.:</label>
                                                            <div class="col-lg-8">
                                                                <input type="number" class="form-control"  placeholder="Enter Phone No." name="phone" value="<?php echo $row['phone'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding: 30px;">
                                                            <label class="control-label col-lg-2" for="pwd">Image:</label>
                                                            <div class="col-lg-10">
                                                                <img src="../images/<?php echo $row['image'] ;?>" alt="">
                                                                <input onchange="myFunction(event)" type="file" name="myimage" value="<?php echo $row['image'] ;?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group" style="padding: 30px;">
                                                            <div class="col-sm-offset-2 col-lg-10" style="padding:30px;">
                                                                <button type="submit" name="editAdmin" style="background-color: #5cb85c; border-color: #5cb85c; font-size: 16px;" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Save</button>
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
            <?php

                    }
                }
            }

            ?>


            </tbody>
        </table>
    </div>

</section>


<!-- EDIT ADMIN -->






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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
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
<script>
    function myFunction(e){
        console.log(e.srcElement.files[0].name);
    }
</script>






</body>
</html>