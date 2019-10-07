<!DOCTYPE html>
<html lang="en">
  <?php
    require_once '../Dao/connection.php';
    require_once 'header.php';
  ?>
<body>
	<?php require 'navbar.php';?>
  <div id="mySidenav" class="sidenav">
  <a href="dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
	<a href="cancelTicket.php" id="cancel">Cancel Tickets<span class="glyphicon glyphicon-remove-circle"></span></a>
  <a href="bookTicket.php" id="view">Book Tickets<span class="glyphicon glyphicon-send"></span></a>
  <a href="profile.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
</div>
  <div class="container">
    <h2>Schedule For Buses</h2>
    <table class="table table-hover">
          <thead>
            <tr>
              <th>Route ID</th>
              <th>Departure Time</th>
              <th>Source</th>
              <th>Destination</th>
              <th>Arrival Time</th>
              <th>Capacity</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            $userType=$row['Type'];
            $sql1 = "SELECT * FROM buskaro.routes ORDER BY STime ASC;";
            $result1 = $conn->query($sql1);
            while($row = $result1->fetch_assoc()) {
				        echo '<tr>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["STime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
										<td>'.$row["Capacity"].'</td>
						      </tr>';
				    }
          ?>
          </tbody>
      </table>
    </div>
    <?php require_once 'footer.php' ?>
</body>
