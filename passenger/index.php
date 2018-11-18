<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BusKaro</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">BusKaro </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php">Your Profile</a></li>
                                    <!--li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li-->
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-home"></i>Home
                                </a></li>
                                 <li><a href="message.php"><i class="menu-icon icon-inbox"></i>Book Ticket</a>
                                </li>
                                <li><a href="book.php"><i class="menu-icon icon-book"></i>Booked Ticket History</a></li>
                                <li><a href="history.php"><i class="menu-icon icon-tasks"></i>Announcements </a></li>
                                <li><a href="recommendations.php"><i class="menu-icon icon-list"></i>Bus Weekly Schedule </a></li>
                                <li><a href="current.php"><i class="menu-icon icon-list"></i>Currently Issued Books </a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                    	<center>
                           	<div class="card" style="width: 50%;"> 
                    			<img class="card-img-top" src="images/user.png" alt="Card image cap">
                    			<div class="card-body">

                                <?php
                                $userID = $_SESSION['UserID'];
                                $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
                                $result = $conn->query($sql);
                                $row=$result->fetch_assoc();
                                $userType=$row['Type'];
                                if($userType=='Student')
                                {
                                    $sql="SELECT * FROM buskaro.student WHERE RollNo='$userID';";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['SName'];
                                    $dept=$row['Branch'];
                                    $batch=$row['Batch'];
                                    $bloodG=$row['BloodG'];
                                }
                                else if($userType=='Faculty')
                                {
                                    $sql="SELECT * FROM buskaro.faculty WHERE FID='$userID';";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['FName'];
                                    $dept=$row['Dept'];
                                    $bloodG=$row['BloodG'];
                                }
                                else if($userType=='Staff')
                                {
                                    $sql="SELECT * FROM buskaro.staff WHERE EID='$userID';";
                                    $result=$conn->query($sql);
                                    $row=$result->fetch_assoc();
                                    $name=$row['EName'];
                                    $bloodG=$row['BloodG'];
                                }
                                
                                ?>    
                    			
                    				<h1 class="card-title"><center><?php echo $name ?></center></h1>
                    				<br>
                                    <p><b>User Type: </b><?php echo $userType ?></p>
                                    <br>
                                    <p><b>User ID : </b><?php echo $userID ?></p>
                                    <br>
                                <?php
                                    if($userType=='Student' || $userType=='Faculty')
                    				    echo '<p><b>Department : </b>'.$dept.'</p> <br>';
                    				if($userType=='Student')
                                        echo '<p><b>Batch : </b>'.$batch.'</p> <br>';
                                ?>
                    				<p><b>Blood Group : </b><?php echo $bloodG ?></p>
                    				</b>
                                

                    			</div>
                    		</div>
                            <br>
                            <a href="edit_student_details.php" class="btn btn-primary">Edit Details</a>    
      					</center>              	
                    </div>
                    
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 BusKaro </b>All rights reserved.
            </div>
        </div>
        
        <!--/.wrapper-->
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>

</html>