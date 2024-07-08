<?php 
	session_start();
	include "connect.php";
	if (!isset($_SESSION['user'])) {
		if (empty($_POST['lname'])||empty($_POST['lpass'])) {
			echo "Enter all data";
		}else{
			$logname=$_POST['lname'];
			$logpass=$_POST['lpass'];

			$_SESSION['user']=$logname;
			$_SESSION['pass']=$logpass;

			$logQuery="select * from std_reg where Username='$logname' AND Password='$logpass'";
			$logExe=mysqli_query($conn,$logQuery);
			if (mysqli_num_rows($logExe)==1) {
				header('location:disp.php');
			}else{
				echo "username or password not valid";
			}
		}
	}else{
		header('location:disp.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
</head>
<body>
	<form action="" method="POST">
		<fieldset style="width: 500px">
			<legend align="center">Login</legend>
			<table>
				<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="lname" minlength="3" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="lpass"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="login"/></td>
					<td><input type="reset" name="reset"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
