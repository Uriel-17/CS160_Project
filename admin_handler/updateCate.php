<?php
require_once("../repo/categoryRepo.php");

if (!isset($_POST["categoryId"])) {
	header("Location: ../admin_pages/categories.php");
}
else {
	$categoryId = $_POST["categoryId"];
	$cate = getCategoryById($categoryId);
	if ($cate == null || count($cate) == 0) {
		header("Location: ../admin_pages/categories.php");
	}
	$categoryname = $cate['categoryname'];
	$description = $cate['description'];
	$image = $cate['image'];
	$priority = $cate['priority'];



	if (isset($_POST["priority"])) {
		if ($_POST["priority"] != "") {
			$priority = $_POST["priority"];
		}
	}
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

	if (isset($_POST["categoryname"])) {
		if ($_POST["categoryname"] != "") {
			$categoryname = $_POST["categoryname"];
		}
		
	}

	
	if (isset($_POST["description"])) {
		if ($_POST["description"] != "") {
			$description = $_POST["description"];
		}
		
	}

	$updatetime = date('Y-m-d H:i:s');
	$edit_result = updateCategory($categoryId, $categoryname, $description, $image, $priority, $updatetime);

	if ($edit_result === false) {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	}
	else {
		header("Location: ../admin_pages/categories.php");
	}
}
?>