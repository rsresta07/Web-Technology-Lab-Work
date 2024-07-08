<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>
    <center>
    <form action="val.php" method="POST">
        <fieldset style="width:500px;">
            <legend align="center">Fill up the form</legend>
            <table border="0">
            <tr>
                <td><label>ID</label></td>
                <td><input type="text" name="id"/></td>
            </tr>
            <tr>
                <td><label>Employee Name</label></td>
                <td><input type="text" name="ename"/></td>
            </tr>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="user"/></td>
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
                <td><input type="number" name="contact"/></td>
            </tr>   
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
                <td><input type="text" name="sal"/></td>
            </tr>
            </table>
            <input type="submit" name="submit" value="Submit"/> 
        </fieldset>
    </form>
    </center>
</body>
</html>