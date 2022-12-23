<?php

if(isset($_POST['register'])){

    $user_name=$_POST['user_name'];
    $user_email=$_POST['user_email'];
    $user_pswd=$_POST['user_pswd'];
    $address=$_POST['address'];
    $number=$_POST['cont_number'];
    $city=$_POST['city'];
    $region=$_POST['region'];
   

    include '../config/db.php';
    //make connection with database. 4 paramater server name,db user_name, db password, db name
    
    $query="INSERT INTO `hospital`( `name`, `email`, `password`, `address`, `cont_number`, `city`, `region`)
     VALUES ('$user_name','$user_email','$user_pswd','$address','$number','$city','$region')";
    
    //execute or run query on database connection
    $result=mysqli_query($conn,$query);
    if($result){
        //first show alert message that redirect again to register pafe.
        //register page is one folder back 

        echo "<script>
        alert('Congratulation you have successfully Registered!');
        window.location='../hospital/h_login.php';
        </script>";
    }
    else{
        echo "<script>
        alert(' you are not successfully Registered!');
        window.location='../hospital/h_register.php';
        </script>";
    }

    
}












?>