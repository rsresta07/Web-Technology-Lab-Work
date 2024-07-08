<?php
    if(isset($_POST['submit'])) {
        /**This line 4 chesks if there is any place in the values left empty or unticked */
        if(empty($_POST['id']) || empty($_POST['ename']) || empty($_POST['user']) || empty($_POST['pass']) 
            || empty($_POST['repass']) || !isset($_POST['gender']) || empty($_POST['contact']) 
            || !isset($_POST['dept']) || !isset($_POST['pos']) || empty($_POST['sal'])) {
            echo "Please Insert All Data";
        } else {
            /**connecting to connection.php*/
            include "connection.php";
            /**pulling data from form.php*/
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

            /**inserting queries*/
            $ins_que = "INSERT INTO tbl_info VALUES ('$id', '$ename', '$user', '$pass', '$repass', '$gender', 
                '$contact', '$dept', '$pos', '$sal')";
            $ins_exe = mysqli_query ($conn, $ins_que);

            /**checking*/
            if($ins_exe) {
                echo "Data inserted";
            } else {
                echo "Check Query";
            }
        }
    }
?>