<?php
        include "connection.php";
        /**we are pulling data from edit.php*/
        $id = $_POST['id'];
        $ename = $_POST['ename'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $dept = $_POST['dept'];
        $pos = $_POST['pos'];
        $sal = $_POST['sal'];
        
        /**query for update 
         * the id, ename, username, pass, repass, gender, contact, department, position, salary should be same as 
         * the one used in datadase. Note that I am not talking about $id, $ename, $pass, $repass, etc.
         */
        $updateQuery = "UPDATE tbl_info SET id='$id', ename='$ename', username='$user', pass='$pass', 
            repass='$repass', gender='$gender', contact='$contact', department='$dept', position='$pos', 
            salary='$sal' WHERE id='$id'";
        $updateExe = mysqli_query($conn, $updateQuery);

        if($updateExe) {
            echo "Error Updated!";
            header("location:display.php");
        } else {
            echo "Error Updating Record!";
        }
    ?>