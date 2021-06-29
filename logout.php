<?php 
if (session_name() == null || session_name() == "") {
	session_start();
}

unset($_SESSION);

session_destroy();

header("Location: index.php");
?>
