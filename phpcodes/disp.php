<?php
	session_start();
	include "connect.php";
	if(isset($_SESSION['user'])||isset($_SESSION['pass'])){

	$disQuery="select * from std_reg";
	$disExe=mysqli_query($conn,$disQuery);

	echo "<table border=1>";
	echo "<tr>";
	echo "<th>Username</th>";
	echo "<th>Password</th>";
	echo "<th>RePassword</th>";
	echo "<th>Gender</th>";
	echo "<th>Date of Birth</th>";
	echo "<th>Intermediate Degree</th>";
	echo "<th>Grade</th>";
	echo "<th>Course</th>";
	echo "<th colspan=2>Operations</th>";
	echo "</tr>";

	if ($disExe) {
		while ($row=mysqli_fetch_assoc($disExe)) {
			$name=$row['Username'];
			$pass=$row['Password'];
			$repass=$row['RePassword'];
			$gen=$row['Gender'];
			$date=$row['DOB'];
			$deg=$row['Degree'];
			$grade=$row['Grade'];
			$course=$row['Course'];

			echo "<tr>";
			echo "<td>$name</td>";
			echo "<td>$pass</td>";
			echo "<td>$repass</td>";
			echo "<td>$gen</td>";
			echo "<td>$date</td>";
			echo "<td>$deg</td>";
			echo "<td>$grade</td>";
			echo "<td>$course</td>";
			echo "<td><a href='update.php?Username=$name & Password=$pass & RePassword=$repass & Gender=$gen & DOB=$date 
			& Degree=$deg & Grade=$grade & Course=$course'>Update</a></td>";
			echo "<td><a href='del.php?Username=$name & Password=$pass'>Delete</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	}else{
    	header("Location:login.php");
	}

	if(isset($_POST['logout'])){
    	session_destroy();
    	header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>
</head>
<body>
    <form method="POST" action="">
        <input type="submit" name="logout" value="logout" />
</form>
</body>
</html>