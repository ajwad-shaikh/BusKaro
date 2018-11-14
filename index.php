<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>BusKaro</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="BusKaro, 24x7 Institute Bus Booking Portal" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>BusKaro</h1>
	<h3>Book Bus Tickets On The Go</h3>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
				<select name="Type" id="Type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
					<option value="Guest">Guest</option>
				</select>
				<br>
				<br>
			
			
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="password" Name="Password" placeholder="Password" required>
				<input type="number" Name="Batch" placeholder="Batch" required>
				
				<select name="Dept" id="Dept">
					<option value="CSE">CSE</option>
					<option value="ECE">ECE</option>
					<option value="ME">ME</option>
					<option value="NS">NS</option>
				</select>
				
				<select name="BloodG" id="BloodG">
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
				<br> <br>
				
				<select name="Type" id="Type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
					<option value="Guest">Guest</option>
				</select>
				<br><br>
				<p> Date of Birth </p>
				<input type="date" Name="DoB" required>
				
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; 2018 BusKaro. All Rights Reserved </a></p>
		<p><a class="underline" href="about.html">About the Project</a></p>
	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['UserID'];
 $p=$_POST['Password'];
 $c=$_POST['Type'];

 $sql="select * from buskaro.passenger where ID='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Pwd'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['UserID']=$u;
   

  if($y=='Admin')
   header('location:admin/index.php');
  else
  	header('location:student/index.php');
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}

if(isset($_POST['signup']))
{
	$userID=$_POST['UserID'];
	$password=$_POST['Password'];
	$name=$_POST['Name'];
	$batch=$_POST['Batch'];
	$dept=$_POST['Dept'];
	$dob=$_POST['DoB'];
	$bloodG=$_POST['BloodG'];
	$type=$_POST['Type'];

	$sql1="insert into buskaro.passenger (ID,Type,Pwd) values ('$userID','$type','$password')";
	if($type=='Student')
	{	echo'Student';
		$sql2="insert into buskaro.student (RollNo, SName, Batch, Branch, DoB, BloodG) values ('$userID','$name', '$batch', '$dept', '$bloodG')";
	
	}
	else if($type=='Faculty')
		$sql2="insert into buskaro.faculty (RollNo, SName, Batch, Branch, DoB, BloodG) values ('$userID','$name', '$batch', '$dept', '$bloodG')";
	else if($type=='Staff')
		$sql2="insert into buskaro.staff (RollNo, SName, Batch, Branch, DoB, BloodG) values ('$userID','$name', '$batch', '$dept', '$bloodG')";
	else if($type=='Guest')
		$sql2="insert into buskaro.guest (RollNo, SName, Batch, Branch, DoB, BloodG) values ('$userID','$name', '$batch', '$dept', '$bloodG')";
	if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}

?>

</body>
<!-- //Body -->

</html>
