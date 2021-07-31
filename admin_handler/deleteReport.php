<?php
require_once("../repo/reportRepo.php");

if (isset($_POST["reportId"])) {
	$result = deleteReport($_POST["reportId"]);
}
else {
	die("Failed to delete!");
}
?>