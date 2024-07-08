<?php  
	include "connect.php";
	$delname=$_GET['Username'];
	$delpass=$_GET['Password'];
	$delQuery="delete from std_reg where Username='$delname' AND Password='$delpass'";
	$delExe=mysqli_query($conn,$delQuery);
	if ($delExe) {
		echo "Data deleted";
		header('location:disp.php');
	}else{
		echo "deletion failed";
	}
?>