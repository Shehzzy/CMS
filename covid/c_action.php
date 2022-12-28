<?php 
if(isset($_POST['btn'])){
    $name = $_POST['c_name'];
    $email = $_POST['email'];
    $number = $_POST['p_number'];
    $txt = $_POST['msg'];


    include 'config/db.php';

    $query = "INSERT INTO `message`( `Name`, `email`, `phone`, `message`) VALUES ('$name','$email'.'$number','$txt')";

   $result=mysqli_query($conn,$query);
    if($result){
        //first show alert message that redirect again to register pafe.
        //register page is one folder back 

        echo "<script>
        alert('message has been passed on!');
        window.location='index.php';
        </script>";
    }
    else{
        echo "<script>
        alert('message has not been passed on');
        window.location='contact.php';
        </script>";
    }

    
}

?>