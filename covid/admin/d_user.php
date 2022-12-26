<?php
$id=$_GET['user_id'];
include '../config/db.php';
$query="DELETE FROM `hospital` WHERE `id`=$id";
$result=mysqli_query($conn,$query);

echo "<script>
window.location='alldetails.php';
alert('Data is Successfully deleted!');
</script>";



?>