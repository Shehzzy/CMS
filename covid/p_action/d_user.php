<?php
$id=$_GET['user_id'];
include '../config/db.php';
$query="DELETE FROM `patients` WHERE `id`=$id";
$result=mysqli_query($conn,$query);

echo "<script>
window.location='alldetails.php';
alert('Are you sure you want to delete details?');
</script>";



?>
