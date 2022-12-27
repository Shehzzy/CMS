<?php
session_start();
unset($_SESSION['a_email']);

// session_destroy();

echo "<script>
window.location='login.php';
</script>";
?>