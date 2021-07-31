<?php
require_once("../repo/categoryRepo.php");

if (!isset($_POST["categoryname"]) || !isset($_POST["description"])) {
	header("Location: ../admin_pages/categories.php");
}
else {
	$priority = 1;
	if (isset($_POST["priority"])) {
		$priority = $_POST["priority"];
	}
	$image = '';
	if (!empty($_FILES)) {
		if ($_FILES['image']['name'] != "")
		{
			$image = $_FILES['image']['name'];
			$uploaddir = '../images/category/';
			$uploadfile = $uploaddir . $image;

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
			} else {
				$_SESSION['message'] = 'failed';
				header("Location: ../admin_pages/categories.php");
			}
		}
	}
	$categoryname = $_POST["categoryname"];
	$description = $_POST["description"];
	$createtime = $updatetime = date('Y-m-d H:i:s');
	$add_result = createCategory($categoryname, $description, $image, $priority, $createtime, $updatetime);

	if ($add_result === false) {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	}
	else {
		header("Location: ../admin_pages/categories.php");
	}
}
?>