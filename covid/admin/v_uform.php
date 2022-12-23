<?php 

if(isset($_POST['update']))
$user_id=$_POST['user_id'];
    $avail=$_POST['avail'];

    include '../config/db.php';
    //make connection with database. 4 paramater server name,db user_name, db password, db name

$query = "UPDATE `vaccine` SET `Availability`='$avail' WHERE `Id`=$user_id";
    
    //execute or run query on database connection
    $result=mysqli_query($conn,$query);
    if($result){
        echo "<script>
        alert('Vaccine successfully updated!');
        window.location='vaccine.php';
        </script>";
    }
    else{
        echo "<script>
        alert('not updated!');
        window.location='u_vaccine.php';
        </script>";
    }