<?php 
session_start();

unset($_SESSION);

session_destroy();

header("Location: ../home/index.php");
?>
