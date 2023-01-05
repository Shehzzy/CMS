<?php
session_start();
unset($_SESSION['h_email']);

// session_destroy();

echo "<script>
window.location='../hospital/h_login.php';
</script>";


?>