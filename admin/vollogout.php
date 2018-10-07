<?php
session_start();
unset($_SESSION['user']);
header("Location: ./vollogin.php");
exit();
?>