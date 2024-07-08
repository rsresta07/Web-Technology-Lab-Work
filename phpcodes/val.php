<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['id'])||empty($_POST['ename'])||empty($_POST['pwd'])||empty($_POST['repwd'])||
        !isset($_POST['gender'])||empty($_POST['dept'])||!isset($_POST['pos'])){
            echo"Please Insert all the Data!!!";
        }else{
            //connecting to connection.php
            include('connection.php');

            $id = $_POST['id'];
            $ename=$_POST['ename'];
            $pwd=$_POST['pwd'];
            $repwd=$_POST['repwd'];
            $gender=$_POST['gender'];
            $dept=$_POST['dept'];
            $pos=$_POST['pos'];
            
            //inserting data into db_company
            $ins_que="INSERT INTO tbl_emp VALUES('$id','$ename','$pwd','$repwd','$gender','$dept','$pos')";
            $ins_exe=mysqli_query($conn,$ins_que);

            //checking
            if($ins_exe){
                echo"Data Inserted!!!";
            }else{
                echo"Check Query!!!";
            }
        }
    }
?>