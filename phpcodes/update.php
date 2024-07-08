<?php 
	$updname=$_GET['Username'];
	$updpass=$_GET['Password'];
	$updrpass=$_GET['RePassword'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update form</title>
</head>
<body>
	<form action="up.php" method="POST">
		<fieldset style="width: 500px">
			<legend align="center">Update Student Registration</legend>
			<table>
				<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="uname" minlength="3" value="<?php echo $updname?>"/></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass" value="<?php echo $updpass?>" /></td>
				</tr>
				<tr>
					<td>RePassword:</td>
					<td><input type="password" name="repass" value="<?php echo $updrpass?>" /></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="Male"/>Male&nbsp;
						<input type="radio" name="gender" value="Female"/>Fe-Male
					</td>
				</tr>
				<tr>
					<td><label>Date of Birth</label></td>
					<td><input type="date" name="date"/></td>
				</tr>
				<tr>
					<td><label>Intermediate Degree</label></td>
					<td><input type="radio" name="sub" value="Science"/>Science&nbsp;
						<input type="radio" name="sub" value="Management"/>Management&nbsp;
						<input type="radio" name="sub" value="Humanites"/>Humanites
					</td>
				</tr>
				<tr>
					<td>Grade Obtained</td>
					<td>
						<select name="grade">
							<option value="A+">A+</option>
							<option value="A">A</option>
							<option value="B+">B+</option>
							<option value="B">B</option>
							<option value="C+">C+</option>
							<option value="C">C</option>
							<option value="D+">D+</option>
							<option value="D">D</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Course Applied:</td>
					<td>
						<select name="course">
							<option value="BCA">BCA</option>
							<option value="BIM">BIM</option>
							<option value="CSIT">CSIT</option>
							<option value="BBM">BBM</option>
							<option value="BBA">BBA</option>
							<option value="BIT">BIT</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"/></td>
					<td><input type="reset" name="reset"/></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>