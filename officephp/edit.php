<?php
    /**the values in $_GET is brought from display.php (line 45)*/
    $id = $_GET['id'];
    $ename = $_GET['ename'];
    $user = $_GET['user'];
    /**as we are not showing password and repassword in display.php to user and we cannot pull the value as well
     * $pass = $_GET['pass'];
     * $repass = $_GET['repass'];
     */
    $gender = $_GET['gender'];
    $contact = $_GET['contact'];
    //$dept = $_GET['dept'];
    //$pos = $_GET['pos'];
    $sal = $_GET['sal'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee Information</title>
</head>
<body>
    <!-- Note that in 'edit.php' we have used 'up.php' in form>action unlike in 'form.php' where we used 'val.php' -->
    <center>
    <form action="up.php" method="POST">
        <fieldset style="width:500px;">
            <legend align="center">Fill up the Form to Update Information</legend>
            <table border="0">
            <tr>
                <td><label>ID</label></td>
                <td><input type="text" name="id" value="<?php echo $id?>"/></td>
            </tr>
            <tr>
                <td><label>Employee Name</label></td>
                <td><input type="text" name="ename" value="<?php echo $ename?>"/></td>
            </tr>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="user" value="<?php echo $user?>"/></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="pass"/></td>
            </tr>
            <tr>
                <td><label>Re-password</label></td>
                <td><input type="password" name="repass"/></td>
            </tr>  
            <tr>
                <td><label>Gender</label></td>
                <td>
                    <input type="radio" name="gender" value="male"/>Male &nbsp;
                    <input type="radio" name="gender" value="female"/>Female &nbsp;
                    <input type="radio" name="gender" value="other"/>Other 
                </td>
            </tr>    
            <tr>
                <td><label>Contact</label></td>
                <td><input type="number" name="contact" value="<?php echo $contact?>"/></td>
            </tr>   
            <!-- Note that we do not use 'value=php...' in Gender, Department, Position-->
            <tr>
                <td><label>Department</label></td>
                <td>
                    <select name="dept">
                        <option value="-1">Please Select One</option>
                        <option value="pr">Public Relation</option>
                        <option value="finance">Finance</option>
                        <option value="planning">Planning</option>
                    </select>
                </td>
            </tr>  
            <tr>
                <td><label>Position</label></td>
                <td>
                    <select name="pos">
                        <option value="-1">Please Select One</option>
                        <option value="manager">Manager</option>
                        <option value="financer">financer</option>
                        <option value="planner">Planner</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td><label>Salary</label></td>
                <td><input type="text" name="sal" value="<?php echo $sal?>"/></td>
            </tr>
            </table>
            <input type="submit" name="submit" value="Submit"/> 
        </fieldset>
    </form>
    </center>
</body>
</html>