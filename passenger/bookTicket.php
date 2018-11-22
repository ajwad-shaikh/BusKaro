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
		<ul class="nav nav-tabs">
		  	<li class="active"><a data-toggle="tab" href="#today">Today</a></li>
	  		<li><a data-toggle="tab" href="#tomorrow">Tomorrow</a></li>
		</ul> 
		<div class="tab-content">
			<div id="today" class="tab-pane fade in active">
			<h4>Buses Leaving Today...</h4>         
	    <?php
	    	createTable();
			function createTable() {
				require('db_init.php');
				$userID = $_SESSION['UserID'];
			    $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
		        $result = $conn->query($sql);
		        $row=$result->fetch_assoc();
		        $userType=$row['Type'];
		        $sql_instance="SELECT * FROM buskaro.bus_instances JOIN buskaro.routes ON buskaro.routes.RID=buskaro.bus_instances.RID WHERE BusDate = CURDATE() ORDER BY DepTime ASC;";
		        $result = $conn->query($sql_instance);
		        $row=$result->fetch_assoc();
		    	if ($result->num_rows > 0) {
		    		echo ' <table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Bus ID</th>
							        <th>Route ID</th>
							        <th>Capacity</th>
							        <th>Departure Time</th>
							        <th>Source</th>
							        <th>Destination</th>
							        <th>Arrival Time</th>
							      </tr>
							    </thead>
							    <tbody>';
					echo '	<tr>
						        <td>'.$row["BID"].'</td>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["Capacity"].'</td>
						        <td>'.$row["DepTime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
						     </tr>';
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '<tr>
						        <td>'.$row["BID"].'</td>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["Capacity"].'</td>
						        <td>'.$row["DepTime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
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
			    $ind = 0;
			    while($row = $result->fetch_assoc()) {
			    	if ($result->num_rows > 0) {
			        $result2 = $conn->query("INSERT INTO buskaro.bus_instances VALUES 
			        				(DAYOFWEEK(CURDATE())*10+'".$ind."','".$row["RID"]."','".$row["Capacity"]."',CURDATE(),'".$row["STime"]."');");
			       	$ind = $ind + 1;
			       	echo $conn->error;
			   		}
			   		else break;
			    }
		       	echo $conn->error; 
				createTable();
			}   
	    ?>
	    </div>
	    <div id="tomorrow" class="tab-pane fade">
    		<h4>Buses Leaving Tomorrow...</h4>
    	<?php
	    	createTable1();
			function createTable1() {
				require('db_init.php');
				$userID = $_SESSION['UserID'];
			    $sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
		        $result = $conn->query($sql);
		        $row=$result->fetch_assoc();
		        $userType=$row['Type'];
		        $sql_instance="SELECT * FROM buskaro.bus_instances JOIN buskaro.routes ON buskaro.routes.RID=buskaro.bus_instances.RID WHERE BusDate = CURDATE() + INTERVAL 1 DAY ORDER BY DepTime ASC;";
		        $result = $conn->query($sql_instance);
		        $row=$result->fetch_assoc();
		    	if ($result->num_rows > 0) {
		    		echo ' <table class="table table-hover">
							    <thead>
							      <tr>
							      	<th>Bus ID</th>
							        <th>Route ID</th>
							        <th>Capacity</th>
							        <th>Departure Time</th>
							        <th>Source</th>
							        <th>Destination</th>
							        <th>Arrival Time</th>
							      </tr>
							    </thead>
							    <tbody>';
					echo '	<tr>
								<td>'.$row["BID"].'</td>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["Capacity"].'</td>
						        <td>'.$row["DepTime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
						     </tr>';
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '<tr>
				        		<td>'.$row["BID"].'</td>
						        <td>'.$row["RID"].'</td>
						        <td>'.$row["Capacity"].'</td>
						        <td>'.$row["DepTime"].'</td>
						        <td>'.$row["Src"].'</td>
						        <td>'.$row["Dst"].'</td>
						        <td>'.$row["DTime"].'</td>
						      </tr>';
				    }
				    echo '</tbody> </table>';
				} else {
				    createInstances1();
				}
			}
			function createInstances1(){
				require('db_init.php');
				$userID = $_SESSION['UserID'];
				$sql="SELECT Type FROM buskaro.passenger WHERE ID='$userID';";
		        $result = $conn->query($sql);
		        $row=$result->fetch_assoc();
		        $userType=$row['Type'];
		        $sql_instance="SELECT * FROM buskaro.routes;";
		        $result = $conn->query($sql_instance);
			    $ind = 0;
			    while($row = $result->fetch_assoc()) {
			    	if ($result->num_rows > 0) {
			        $result2 = $conn->query("INSERT INTO buskaro.bus_instances VALUES 
			        				(DAYOFWEEK(CURDATE() + INTERVAL 1 DAY)*10+'".$ind."','".$row["RID"]."','".$row["Capacity"]."',CURDATE() + INTERVAL 1 DAY,'".$row["STime"]."');");
			       	$ind = $ind + 1;
			       	echo $conn->error;
			   		}
			   		else break;
			    }
		       	echo $conn->error; 
				createTable1();
			}   
	    ?>
    	</div>
	</div>
</body>