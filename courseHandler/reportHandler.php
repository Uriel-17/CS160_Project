<?php
session_start();
require_once("../repo/reportRepo.php");

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
	die("Failed to add new report");
}

$detail = "";
if (isset($_POST["report"])) {
	$detail = $_POST["report"];
}
else {
	die("Failed to add new report");
}

$createtime = $updatetime = date('Y-m-d H:i:s');

$submit_result = createReport($userId, $courseId, $detail, $createtime, $updatetime);
$message = 'Reported Successfully';

if ($submit_result === false) {
	die("Failed to add new report");
}

echo $message;

?>