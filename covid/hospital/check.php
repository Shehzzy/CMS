<?php
if(!isset($_SESSION['h_email'])){
  echo "<script>
  window.location='h_login.php';
  </script>";
  
}
?>