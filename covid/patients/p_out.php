<?php
session_start();
unset($_SESSION['p_email']);

//session_destroy();

echo "<script>
window.location='p_login.php';
</script>";


?>