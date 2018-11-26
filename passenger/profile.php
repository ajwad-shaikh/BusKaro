<!DOCTYPE html>
<html lang="en">
<?php require 'dbconn.php';
require 'header.php';
?>
<body>
	<?php require 'navbar.php' ;	?>
	<div id="mySidenav" class="sidenav">
	<a href="dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
  <a href="view_tickets.php" id="view">View Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
  <a href="cancelTicket.php" id="cancel">Cancel Tickets<span class="glyphicon glyphicon-remove-circle"></span></a>
  <a href="index.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
	<?php
	require 'db_init.php';
	$userID = $_SESSION['UserID'];
  $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
  $result = $conn->query($sql);
  $row=$result->fetch_assoc();
  $userType=$row['Type'];
  if($userType=='Student'){
	$sql_instance="SELECT * FROM buskaro.student WHERE RollNo=".$userID.";";
	$result = $conn->query($sql_instance);
	$row = $result->fetch_assoc();
	echo '<center><div class="container-fluid">
					<div class="card bg-info pl-2" style="width:25%">
						<br><br>
					    <div class="card-header"><h3>Your BusKaro Profile</h3></div><br><br>
					    <h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Your Name&emsp;-&emsp;'.$row['SName'].'</h4>
							<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Roll No&emsp;-&emsp;'.$row['RollNo'].' </h4>
							<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Batch&emsp;-&emsp;'.$row['Batch'].'</h4>
							<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Branch&emsp;-&emsp;'.$row['Branch'].'</h4>
							<h4 class="card-body text-justify">&nbsp;&nbsp;&nbsp;&nbsp;Blood Group&emsp;-&emsp;'.$row['BloodG'].'</h4>
							<br><br>
					  </div>
					</div>
				</div><br><br>';

  }

	?>

	<?php require 'footer.php' ?>

</body>
