<!DOCTYPE html>
<html lang="en">
  <?php
    require_once '../Dao/connection.php' ;
    require_once 'header.php';
  ?>
<body>
	<?php require_once 'navbar.php';
	if(isset($_GET['alert']))
	{
		echo '<div class = container><div class="alert alert-success">
		  <strong>Yay! Your ticket is cancelled!...</strong> Remember, you can always BusKaro :)
		</div></div>';
	}?>
	<div id="mySidenav" class="sidenav">
	<a href="dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
	<a href="bookTicket.php" id="cancel">Book Tickets<span class="glyphicon glyphicon-send"></span></a>
  <a href="view_tickets.php" id="view">View Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
  <a href="profile.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
  <div class="container">
    <h2>Cancel Booked Tickets</h2>
    <table class="table table-hover">
          <thead>
            <tr>
              <th>Bus ID</th>
              <th>Route ID</th>
              <th>Journey Date</th>
              <th>Departure Time</th>
              <th>Source</th>
              <th>Destination</th>
              <th>Arrival Time</th>
              <th>Seat Number</th>
							<th>Cancel Ticket</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $userID = $_SESSION['UserID'];
            $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            $userType=$row['Type'];
            $sql1 = "SELECT * FROM buskaro.seat_matrix JOIN buskaro.routes ON buskaro.seat_matrix.RID = buskaro.routes.RID WHERE Passenger = '$userID' ORDER BY BusDate DESC;";
            $result1 = $conn->query($sql1);
            while($row = $result1->fetch_assoc()) {
				        echo '<tr>
						        <td>'.$row["BID"].'</td>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["BusDate"].'</td>
						        <td>'.$row["STime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
										<td>'.$row["SeatNo"].'</td>
										<td><a href="cancel_request.php?bid='.$row["BID"].'&seat='.$row["SeatNo"].'" class="btn btn-danger" role="button">Cancel</a></td>
						      </tr>';
				    }
          ?>
          </tbody>
      </table>
    </div>
    <?php require_once 'footer.php' ?>
</body>
