<?php
session_start();
unset($_SESSION['l_email']);

session_destroy();

echo "<script>
window.location='p_login.php';
</script>";


?>