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
    <h2>Booked Ticket history</h2>
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
              <th>Digital Ticket</th>
            </tr>
          </thead>
          <tbody>
          <?php

            $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID'";
            $result = $conn->query($sql);
            $row=$result->fetch_assoc();
            $userType=$row['Type'];
            $sql1 = "SELECT * FROM buskaro.seat_matrix JOIN buskaro.routes ON buskaro.seat_matrix.RID = buskaro.routes.RID WHERE Passenger = '$userID' ORDER BY BusDate DESC";
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
                  <td><a href="ticket.php?seat='.$row['SeatNo'].'&bid='.$row['BID'].'" class="btn btn-info" role="button">View</a></td>
                </tr>';
				    }
          ?>
          </tbody>
      </table>
    </div>
    <?php require_once 'footer.php' ?>
</body>
