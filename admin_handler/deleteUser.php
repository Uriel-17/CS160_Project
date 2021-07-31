<?php
require_once("../repo/userRepo.php");

if (isset($_POST["userId"])) {
	$result = deleteUser($_POST["userId"]);
}
else {
	die("Failed to delete!");
}
?>