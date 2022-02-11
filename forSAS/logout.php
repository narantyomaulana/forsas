
<?php 
session_start();
session_unset();
session_destroy();
setcookie('nik', '', 0, '/');
setcookie('nama', '', 0, '/');
header('location:login.php');
?>