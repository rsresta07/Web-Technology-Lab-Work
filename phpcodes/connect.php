<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="db_nccs";
	$conn=mysqli_connect($servername,$username,$password,$db);
	if ($conn) {
		echo "Connection Successful";
	}else{
		echo "Connection failed".mysqli_connect_error();
	}
?>