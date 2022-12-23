<?php

$conn=mysqli_connect("localhost","root","","covid");
if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}
?>