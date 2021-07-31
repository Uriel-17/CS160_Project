<?php
session_start();
require_once("../repo/saveRepo.php");

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
	die("You have to log in first!");
}

$courseId = "";
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
}
else {
	die("Failed to save the course");
}

$createtime = date('Y-m-d H:i:s');

$check_save = getSavedCourse($userId, $courseId);
$submit_result = false;
$message = "";

if ($check_save != null && count($check_save) > 0) {
	$submit_result = deleteSavedCourse($userId, $courseId);
	$message = 'Save';
}
else {
	$submit_result = createSavedCourse($userId, $courseId, $createtime);
	$message = 'Unsave';
}

if ($submit_result === false) {
	die("Failed to save the course");
}

echo $message;

?>