<?php 
$name =  $_GET['name'];
$password = $_GET['password'];
$repassword =$_GET['repassword'];
$gender =$_GET['gender'];
$dateofbirth = $_GET['dateofbirth'];
$degree =$_GET['degree'];
$grade =$_GET['grade'];
$course =$_GET['course'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit information</h2>
    <form method="POST" action="up.php">
    <fieldset style="width:500px; height:500px; padding:10px; line-height: 30px;">
        <legend align="center">Student Registration</legend>
        <label>Username: </label>
        <input type="text" name="uname" value="<?php echo $name?>"/><br/>
        <label>Password: </label>
        <input type="password" name="pass" value="<?php echo $password?>"/><br/>
        <label>Repassword: </label>
        <input type="password" name="repass" value="<?php echo $repassword?>"/><br/>
        <label>Gender: </label>
        <input type="radio" name="gender" value="male"/>Male &nbsp;
        <input type="radio" name="gender" value="female"/>Female 
        <br/>
        <label>Date of Birth: </label>
        <input type="date" name="dob"/><br/>
        <label>Intermidate Degree: </label>
        <input type="radio" name="deg" value="science"/>science &nbsp;
        <input type="radio" name="deg" value="management"/>Management &nbsp;
        <input type="radio" name="deg" value="humanities"/>Humanities 
        <br/>
        <label>Grade Obtained: </label>
       <select name="grd"> 
        <option value="-1"></option>
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
        </select><br/>
        <label>Course Applied: </label>
       <select name="crs"> 
        <option value="-1"></option>
            <option value="BCA">BCA</option>
            <option value="BIM">BIM</option>
            <option value="CSIT">CSIT</option>
        </select><br/>
        <input type="submit" name="submit" value="submit"/> &nbsp;
        <input type="reset" name="reset" value="reset"/>
    </fieldset>  
    </form>
    
</body>

</html>



