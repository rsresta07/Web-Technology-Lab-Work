<html>
    <head>
        <title>List of Employee</title>
    </head>
    <body>
        <form action="val.php" method="POST">
            <label>ID: </label>
            <input type="number" name="id"/><br/>
            <label>Name: </label>
            <input type="text" name="ename"/><br/>
            <label>Password: </label>
            <input type="password" name="pwd"/><br/>
            <label>Re-Password: </label>
            <input type="password" name="repwd"/><br/>
            <label>Gender: </label>
            <input type="radio" name="gender" value="male"/>Male &nbsp;
            <input type="radio" name="gender" value="female"/>Female &nbsp;
            <input type="radio" name="gender" value="other"/>Other <br/>
            <label>Department: </label>
            <input type="text" name="dept"/><br/>
            <label>Position: </label>
            <select name="pos">
                <option value="-1">Select Any One</option>
                <option value="manager">Manager</option>
                <option value="supervisor">Supervisor</option>
                <option value="deptment head">Department Head</option>
                <option value="employee">Employee</option>
            </select><br/>
            <input type="submit" name="submit" value="Submit"/> &nbsp;
            <input type="reset" name="reset" value="reset"/>
        </form>
    </body>
</html>