<html>
    <head><title>Employee Information</title></head>
</html>
<?php
    include "connection.php";
    $ret_query = "SELECT * FROM tbl_info";
    $ret_exe = mysqli_query($conn, $ret_query);

    if ($ret_exe){
        echo "<table border=1>
            <tr>
                <th>&nbsp; ID &nbsp;</th>
                <th>&nbsp; Name &nbsp;</th>
                <th>&nbsp; Username &nbsp;</th>
                <th>&nbsp; Gender &nbsp;</th>
                <th>&nbsp; Contact &nbsp;</th>
                <th>&nbsp; Department &nbsp;</th>
                <th>&nbsp; Position &nbsp;</th>
                <th>&nbsp; Salary &nbsp;</th>
            </tr>";

        while ($row = mysqli_fetch_assoc ($ret_exe)) {
            /**here the value inside $row is brought from database so we write value from database*/
            $id = $row['id'];
            $ename = $row['ename'];
            $user = $row['username'];
            $gender = $row['gender'];
            $contact = $row['contact'];
            $dept = $row['department'];
            $pos = $row['position'];
            $sal = $row['salary'];
            
            /**line 45 transfers the values to edit.php and line 47 is used to delete the data by using id as key*/
            echo "<tr>
                    <td>&nbsp; $id &nbsp;</td>
                    <td>&nbsp; $ename &nbsp;</td>
                    <td>&nbsp; $user &nbsp;</td>
                    <td>&nbsp; $gender &nbsp;</td>
                    <td>&nbsp; $contact &nbsp;</td>
                    <td>&nbsp; $dept &nbsp;</td>
                    <td>&nbsp; $pos &nbsp;</td>
                    <td>&nbsp; $sal &nbsp;</td>
                    <td>
                        &nbsp;
                        <a href = 'edit.php ? id=$id & ename=$ename & user=$user & gender=$gender & contact=$contact & 
                        dept=$dept & pos=$pos & sal=$sal'>Edit</a>&nbsp;
                        <a href = 'del.php ? id=$id'>Delete</a>&nbsp;
                    </td>
                </tr>";
        }
        echo "</table>";
    }
?>