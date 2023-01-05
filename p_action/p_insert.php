<?php
if(isset($_POST['register'])){
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


    $query="INSERT INTO `patients`(`f_name`, `l_name`, `email`, `pass`, `age`, `gender`, `dob`, `address`, `m_number`) VALUES(
        '$f_name','$l_name','$email','$password','$age','$gender','$dob','$address','$m_num')";
   $result=mysqli_query($conn,$query);
   if($result){ 
       echo "<script>
       alert('Congratulation you have successfully Registered!');
       window.location='../patients/p_login.php';
       </script>";
   }
   else{
       echo "<script>
       alert(' you are not successfully Registered!');
       window.location='../patients/register.php';
       </script>";
   }
}




















?>