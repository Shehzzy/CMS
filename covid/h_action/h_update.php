<?php 

if(isset($_POST['update']))
    $user_id=$_POST['user_id'];
    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['add'];
    $m_num=$_POST['num'];

    include '../config/db.php';
    //make connection with database. 4 paramater server name,db user_name, db password, db name

$query = "UPDATE `patients` SET `f_name`='$f_name',`l_name`='$l_name',`email`='$email',`pass`='$password',`age`='$age',`gender`='$gender',`dob`='$dob',`address`='$address',`m_number`='$m_num' WHERE `id`=".$user_id;
    
    //execute or run query on database connection
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>
        alert('Congratulation you have successfully updated!');
        window.location='../patients/profile.php';
        </script>";
    }
    else{
        echo "<script>
        alert(' you are not successfully Registered!');
        window.location='p_update.php';
        </script>";
    }
















?>