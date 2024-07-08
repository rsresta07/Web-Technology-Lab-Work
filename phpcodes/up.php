<?php 
	include "connect.php";
	$upname=$_POST['uname'];
	$uppass=$_POST['pass'];
	$uprpass=$_POST['repass'];
	$upgender=$_POST['gender'];
	$update=$_POST['date'];
	$updegree=$_POST['sub'];
	$upgrade=$_POST['grade'];
	$upcorse=$_POST['course'];
	$upQuery="update std_reg set Username='$upname',Password='$uppass',RePassword='$uprpass',Gender='$upgender',DOB='$update',
	Degree='$updegree',Grade='$upgrade',Course='$upcorse' where Password='$uppass' AND RePassword='$uprpass'";
	$upExe=mysqli_query($conn,$upQuery);
	if ($upExe) {
		echo "Update successful";
		header('location:disp.php');
	}else{
		echo "Update failed".mysqli_error();
	}
?>