<?php
require_once("../repo/commentRepo.php");

if (isset($_POST["commentId"])) {
	$result = deleteComment($_POST["commentId"]);
}
else {
	die("Failed to delete!");
}
?>