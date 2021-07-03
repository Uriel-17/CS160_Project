<?php
session_start();
require_once("repo/courseRepo.php");

$userId = 0;
if (isset($_SESSION["userId"])) {
	$userId = $_SESSION["userId"];
}
else {
	header("Location: logout.php");
}

$categoryId = '';
if (isset($_POST['categoryid'])){
	$categoryId = $_POST['categoryid'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php?check=1");
}

$author = '';
if (isset($_POST['author'])){
	$author = $_POST['author'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php?check=2");
}

$coursename = '';
if (isset($_POST['coursename'])){
	$coursename = $_POST['coursename'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php?check=3");
}

$description = '';
if (isset($_POST['description'])){
	$description = $_POST['description'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php?check=4");
}

$URL = '';
if (isset($_POST['URL'])){
	$URL = $_POST['URL'];
}
else {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php?check=5");
}

$image = '';
if (!empty($_FILES)){
	$image = $_FILES['image']['name'];
	$uploaddir = 'images/course_img/';
	$uploadfile = $uploaddir . $image;

	echo "<p>";

	if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
	  echo "File is valid, and was successfully uploaded.\n";
	} else {
	   echo "Upload failed";
	}

	echo "</p>";
	echo '<pre>';
	echo 'Here is some more debugging info:';
	print_r($_FILES);
	print "</pre>";
}

$createtime = $updatetime = date('Y-m-d H:i:s');

echo $coursename."<br>";
echo $description."<br>";
echo $categoryId."<br>";
echo $author."<br>";
echo $userId."<br>";
echo $URL."<br>";
echo $image."<br>";
echo $createtime."<br>";

$insert_result = createCourse($coursename, $description, $categoryId, $author, $userId, $URL, $image, $createtime, $updatetime);
if ($insert_result === false) {
	$_SESSION['message'] = 'failed';
	header("Location: upload.php");
}
else {
	$_SESSION['message'] = 'success';
	header("Location: upload.php");
}
?>
