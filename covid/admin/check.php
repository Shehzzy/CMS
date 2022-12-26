<?php
if(!isset($_SESSION['a_email'])){
  echo "<script>
  window.location='login.php';
  </script>";
  
}
?>