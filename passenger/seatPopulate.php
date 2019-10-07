<?php
	require_once '../Dao/connection.php';

	$sql="DELETE FROM buskaro.bus_instances WHERE BusDate < CURDATE()";
	$result = $conn->query($sql);
    echo $conn->error;

	$sql_instance="SELECT * FROM buskaro.bus_instances WHERE BusDate = CURDATE() ORDER BY DepTime ASC;";
    $result = $conn->query($sql_instance);
    $row=$result->fetch_assoc();
	if ($result->num_rows == 0) {
		$sql_instance="SELECT * FROM buskaro.routes ORDER BY STime ASC;";
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
	}

    $sql_instance="SELECT * FROM buskaro.bus_instances WHERE BusDate = CURDATE() + INTERVAL 1 DAY ORDER BY DepTime ASC;";
    $result = $conn->query($sql_instance);
    $row=$result->fetch_assoc();
	if ($result->num_rows == 0) {
	    $sql_instance="SELECT * FROM buskaro.routes ORDER BY STime ASC;";
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
	}

	$sql = "DELETE FROM buskaro.seat_matrix WHERE BusDate < CURDATE() - INTERVAL 2 DAY";
	$result = $conn->query($sql);
    echo $conn->error;

    $sql = "SELECT * FROM buskaro.seat_matrix WHERE BusDate = CURDATE()";
    $result = $conn->query($sql);
    echo $conn->error;
    if($result->num_rows == 0)
    {
    	$sql1="SELECT BID, RID, Seats_Left FROM buskaro.bus_instances WHERE BusDate = CURDATE()";
    	$result1 = $conn->query($sql1);
    	echo $conn->error;
    	if($result1->num_rows > 0)
    	{
    		while($row = $result1->fetch_assoc())
    		{
    			for($i = 1; $i <= $row["Seats_Left"]; $i++)
    			{
    				$sql2="INSERT INTO buskaro.seat_matrix VALUES (".$row["BID"].",".$row["RID"].",".$i.",NULL,CURDATE());";
    				$result2= $conn->query($sql2);
    				echo $conn->error;
    			}
    		}
    	}
    }

    $sql = "SELECT * FROM buskaro.seat_matrix WHERE BusDate = CURDATE() + INTERVAL 1 DAY";
    $result = $conn->query($sql);
    echo $conn->error;
    if($result->num_rows == 0)
    {
    	$sql1="SELECT BID, RID, Seats_Left FROM buskaro.bus_instances WHERE BusDate = CURDATE() + INTERVAL 1 DAY";
    	$result1 = $conn->query($sql1);
    	echo $conn->error;
    	if($result1->num_rows > 0)
    	{
    		while($row = $result1->fetch_assoc())
    		{
    			for($i = 1; $i <= $row["Seats_Left"]; $i++)
    			{
    				$sql2="INSERT INTO buskaro.seat_matrix VALUES (".$row["BID"].",".$row["RID"].",".$i.",NULL,CURDATE() + INTERVAL 1 DAY);";
    				$result2= $conn->query($sql2);
    				echo $conn->error;
    			}
    		}
    	}
    }
?>
