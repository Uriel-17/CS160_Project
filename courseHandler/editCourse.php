<?php
require_once("../repo/courseRepo.php");

if (!isset($_POST["courseId"])) {
	header("Location: ../user_profile/upload_course.php");
}
else {
	$courseId = $_POST["courseId"];
	$course = getCourseById($courseId);
	if ($course == null || count($course) == 0) {
		header("Location: ../user_profile/upload_course.php");
	}
	$courseTitle = $course['courseTitle'];
	$description = $course['description'];
	$image = $course['image'];
	$url = $course['url'];
	$categoryId = $course['categoryId'];
	$author = $course['author'];


	if (isset($_POST["courseTitle"])) {
		if ($_POST["courseTitle"] != "") {
			$courseTitle = $_POST["courseTitle"];
		}
	}

	if (isset($_POST["description"])) {
		if ($_POST["description"] != "") {
			$description = $_POST["description"];
		}
	}

	if (isset($_POST["url"])) {
		if ($_POST["url"] != "") {
			$url = $_POST["url"];
		}
	}

	if (isset($_POST["categoryId"])) {
		if ($_POST["categoryId"] != "") {
			$categoryId = $_POST["categoryId"];
		}
	}

	if (isset($_POST["author"])) {
		if ($_POST["author"] != "") {
			$author = $_POST["author"];
		}
	}

	if (!empty($_FILES)) {
		if ($_FILES['image']['name'] != "")
		{
			$image = $_FILES['image']['name'];
			$uploaddir = '../images/course_img/';
			$uploadfile = $uploaddir . $image;

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
			} else {
				$_SESSION['message'] = 'failed';
				header("Location: ../user_profile/upload_course.php");
			}
		}
	}

	$updatetime = date('Y-m-d H:i:s');
	$edit_result = updateCourse($courseId, $courseTitle, $description, $categoryId, $author, $url, $image, $updatetime);

	if ($edit_result === false) {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	}
	else {
		header("Location: ../user_profile/upload_course.php");
	}
}
?>