<?php
session_start();
require_once("../repo/courseRepo.php");

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
	header("Location: ../signup_login/logout.php");
}

$categoryId = '';
if (isset($_POST['categoryid'])){
	$categoryId = $_POST['categoryid'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}

$author = '';
if (isset($_POST['author'])){
	$author = $_POST['author'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}

$coursename = '';
if (isset($_POST['coursename'])){
	$coursename = $_POST['coursename'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}

$description = '';
if (isset($_POST['description'])){
	$description = $_POST['description'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}

$URL = '';
if (isset($_POST['URL'])){
	$URL = $_POST['URL'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}

$image = '';
if (!empty($_FILES)) {
	if ($_FILES['image']['name'] != "")
	{
		$image = $_FILES['image']['name'];
		$uploaddir = '../images/course_img/';
		$uploadfile = $uploaddir . $image;

		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
		} else {
			$_SESSION['message'] = 'failed';
			header("Location: ../user_profile/upload.php");
		}
	}
}


$createtime = $updatetime = date('Y-m-d H:i:s');

$insert_result = createCourse($coursename, $description, $categoryId, $author, $userId, $URL, $image, $createtime, $updatetime);
if ($insert_result === false) {
	$_SESSION['message'] = 'failed';
	header("Location: ../user_profile/upload.php");
}
else {
	$_SESSION['message'] = 'success';
	header("Location: ../user_profile/upload_course.php");
}
?>
