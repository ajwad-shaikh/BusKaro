<!DOCTYPE html>
<html lang="en">
  <?php
    require_once '../Dao/connection.php';
    require_once 'header.php';
  ?>
<body>
	<?php require_once 'navbar.php';?>
	<div id="mySidenav" class="sidenav">
	<a href="dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
	<a href="bookTicket.php" id="cancel">Book Tickets<span class="glyphicon glyphicon-send"></span></a>
  <a href="view_tickets.php" id="view">View Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
  <a href="profile.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
  <div class="container">
    <h2>Latest Announcements</h2><br>
    <h4>Announcements will be live as soon as this web-app goes live. You're all caught up for now :)</h4>
  </div>
    <?php require_once 'footer.php';?>
</body>
