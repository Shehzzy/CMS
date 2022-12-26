<?php
if(!isset($_SESSION['p_email'])){
  echo "<script>
  window.location='p_login.php';
  </script>";
  
}
?>