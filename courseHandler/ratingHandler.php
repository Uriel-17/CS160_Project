<?php
session_start();
require_once("../repo/ratingRepo.php");

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
	die("You have to log in first!");
}

$courseId = 0;
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
}
else {
	die("Failed to add or update rating");
}

$rate = 0;
if (isset($_POST["rate"])) {
	$rate = $_POST["rate"];
}
else {
	die("Failed to add or update rating");
}

$createtime = $updatetime = date('Y-m-d H:i:s');

$check_rating = getRating($userId, $courseId);
$submit_result = false;
$message = "";

if ($check_rating != null && count($check_rating) > 0) {
	$submit_result = updateRating($userId, $courseId, $rate, $updatetime);
	$message = 'Updated Successfully';
}
else {
	$submit_result = createRating($userId, $courseId, $rate, $createtime, $updatetime);
	$message = 'Rated Successfully';
}

if ($submit_result === false) {
	die("Failed to add or update rating");
}

echo $message;
?>