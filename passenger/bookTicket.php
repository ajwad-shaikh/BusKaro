<!DOCTYPE html>
<html lang="en">
<?php require 'dbconn.php';
require 'header.php';
?>
<body>
	<?php require 'navbar.php' ;	?>
	<div class="container">
	  <h2>Available Buses</h2>
	  <p>Kindly Select The Bus You Wish To Book Tickets For:</p>            
	  
	    <?php
	    	createTable();
			function createTable() {
				require('db_init.php');
				$userID = $_SESSION['UserID'];
			    $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
		        $result = $conn->query($sql);
		        $row=$result->fetch_assoc();
		        $userType=$row['Type'];
		        $sql_instance="SELECT * FROM buskaro.bus_instances;";
		        $result = $conn->query($sql_instance);
		        $row=$result->fetch_assoc();
		    	if ($result->num_rows > 0) {
		    		echo ' <table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Route ID</th>
							        <th>Capacity</th>
							        <th>BusDate</th>
							        <th>Departure Time</th>
							      </tr>
							    </thead>
							    <tbody>';
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '<tr>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["Capacity"].'</td>
						        <td>'.$row["BusDate"].'</td>
						        <td>'.$row["DepTime"].'</td>
						      </tr>';
				    }
				    echo '</tbody> </table>';
				} else {
				    createInstances();
				}
			}
			function createInstances(){
				require('db_init.php');
				$userID = $_SESSION['UserID'];
				$sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
		        $result = $conn->query($sql);
		        $row=$result->fetch_assoc();
		        $userType=$row['Type'];
		        $sql_instance="SELECT * FROM buskaro.routes;";
		        $result = $conn->query($sql_instance);
		        $row=$result->fetch_assoc();
		    	if ($result->num_rows > 0) {
				    // output data of each row
				    $ind = 1;
				    while($row = $result->fetch_assoc()) {
				        $result2 = $conn->query("INSERT INTO buskaro.bus_instances VALUES 
				        				('".$ind."','".$row["RID"]."','".$row["Capacity"]."',CURDATE(),'".$row["DTime"]."');");
				       $ind = $ind + 1;
				    }
				    
				}
				createTable();
			}   
	    ?>
	    
	</div>
</body>