<?php
    include('connection.php');
    $ret_query="SELECT * FROM tbl_emp";
    $ret_exe=mysqli_query($conn,$ret_query);

    if ($ret_exe){
        echo"<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Re-Password</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Position</th>
            </tr>";
        while($row=mysqli_fetch_assoc($ret_exe)){
            $id = $_row['id'];
            $ename=$_row['ename'];
            $pwd=$_row['pwd'];
            $repwd=$_row['repwd'];
            $gender=$_row['gender'];
            $dept=$_row['dept'];
            $pos=$_row['pos'];
            
            echo"<tr>
                    <td>$id</td>
                    <td>$ename</td>
                    <td>$pwd</td>
                    <td>$repwd</td>
                    <td>$gender</td>
                    <td>$dept</td>
                    <td>$pos</td>
                </tr>";
        }
        echo"</table>";
    }
?>