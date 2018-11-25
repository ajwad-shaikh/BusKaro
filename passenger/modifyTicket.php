<!DOCTYPE html>
<html lang="en">
<?php require 'header.php'?>
<body>
	<?php require 'navbar.php' ?>
	<div id="mySidenav" class="sidenav">
  <a href="dashboard.php" id="dashboard">Go Home<span class="glyphicon glyphicon-home"></span></a>
	<a href="cancelTicket.php" id="cancel">Cancel Tickets<span class="glyphicon glyphicon-remove-circle"></span></a>
  <a href="bookTicket.php" id="view">Book Tickets<span class="glyphicon glyphicon-send"></span></a>
  <a href="view_tickets.php" id="modify">Modify Tickets<span class="glyphicon glyphicon-qrcode"></span></a>
  <a href="index.php" id="profile">Your Profile<span class="glyphicon glyphicon-user"></span></a>
	</div>
	<?php require 'footer.php' ?>
</body>
