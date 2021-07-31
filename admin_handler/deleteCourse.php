<?php
require_once("../repo/courseRepo.php");

if (isset($_POST["courseId"])) {
	$result = deleteCourse($_POST["courseId"]);
}
else {
	die("Failed to delete!");
}
?>