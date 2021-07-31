<?php
require_once("../repo/ratingRepo.php");

if (isset($_POST["userId"]) && isset($_POST["courseId"])) {
	$result = deleteRating($_POST["userId"], $_POST["courseId"]);
}
else {
	die("Failed to delete!");
}
?>