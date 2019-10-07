<!DOCTYPE html>
<html lang="en">
  <?php
    require_once '../Dao/connection.php';
    require_once 'header.php';
  ?>
<body>
	<?php
    require_once 'navbar.php';
    $bid = $_GET['bid'];
    $sql_instance="SELECT * FROM buskaro.seat_matrix WHERE Passenger=".$userID." AND (BusDate = CURDATE() OR BusDate = CURDATE() + INTERVAL 1 DAY);";
    $result = $conn->query($sql_instance);
    if($result->num_rows < 6)
    {
      $sql_instance="SELECT * FROM buskaro.seat_matrix WHERE BID=".$bid." AND Passenger IS NULL;";
      $result = $conn->query($sql_instance);
      echo $conn->error;
      $row = $result->fetch_assoc();
      $sql_start="SET AUTOCOMMIT = OFF; START TRANSACTION;";
      $result = $conn->query($sql_start);
      $sql_entry="UPDATE buskaro.seat_matrix SET Passenger = '$userID' WHERE BID='$bid' AND SeatNo=".$row['SeatNo']."";
      $sql_seat="UPDATE buskaro.bus_instances SET Seats_Left = Seats_Left - 1 WHERE BID=".$bid.";";
      if(($conn->query($sql_entry) == TRUE)&&($conn->query($sql_seat) == TRUE))
      {
        $sql_commit = "COMMIT;";
        $result = $conn->query($sql_commit);
        $redurl = "ticket.php?seat=".$row['SeatNo']."&bid=".$row['BID'];
        redirect($redurl);
      }
      else
      {
        echo $conn->error;
        $sql_rollback = "ROLLBACK;";
        $result = $conn->query($sql_rollback);
        echo 'Sorry, there was a problem :(';
        Fail();
      }
    }
    else
    {
      $redurl="bookTicket.php?alert=0";
      redirect($redurl);
      Limit();
    }
    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
    function Fail() {
      echo 'Sorry, there was a problem :(';
    }
    function Limit() {
      echo 'Sorry, you have exceeded the daily ticket limit!';
    }
  ?>
</body>
