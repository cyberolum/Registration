<?php
session_start();
unset($_SESSION['logginned']);
header("Location: registration.php");
?>
