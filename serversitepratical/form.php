<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <form action="val.php" method="POST">
        <fieldset style="width:500px;">
            <legend align="center">Student Registration</legend>
            <table border="0">
            <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="user"/></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="pass"/></td>
            </tr>
            <tr>
                <td><label>Repassword:</label></td>
                <td><input type="password" name="repass"/></td>
            </tr>  
            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="male"/>Male &nbsp;
                    <input type="radio" name="gender" value="female"/>Female
                </td>
            </tr> 
            <tr>
                <td><label>Date of Birth: </label></td>
                <td><input type="date" name="dob"/></td>
            </tr>
            <tr>
                <td><label>Imtermediate Degree</label></td>
                <td>
                    <input type="radio" name="degree" value="science"/>Science &nbsp;
                    <input type="radio" name="degree" value="mangt"/>Management &nbsp;
                    <input type="radio" name="degree" value="human"/>Humanities
                </td>
            </tr>  
            <tr>
                <td><label>Grade Obtained</label></td>
                <td>
                    <select name="grade">
                        <option value="a+">A+</option>
                        <option value="a">A</option>
                        <option value="b+">B+</option>
                        <option value="b">B</option>
                        <option value="c+">C+</option>
                        <option value="c">C</option>
                    </select>
                </td>
            </tr>  
            <tr>
                <td><label>Course Applied:</label></td>
                <td>
                    <select name="course">
                        <option value="bca">BCA</option>
                        <option value="bim">BIM</option>
                        <option value="bit">BIT</option>
                    </select>
                </td>
            </tr>  
            </table>
            <input type="submit" name="submit" value="Submit"/> &nbsp;
            <input type="reset" name="reset" value="Reset"/> 
        </fieldset>
    </form>
</body>
</html>