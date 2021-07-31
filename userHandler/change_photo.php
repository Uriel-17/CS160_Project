<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}
require_once("../repo/userRepo.php");

if (!isset($_SESSION['userId'])) {
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
}

if (!empty($_FILES)) {
		if ($_FILES['image']['name'] != "")
		{
			$image = $_FILES['image']['name'];
			$uploaddir = '../images/user_img/';
			$uploadfile = $uploaddir . $image;

			if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
				$updatetime = date('Y-m-d H:i:s');
				$update_photo = updateUserImage($_SESSION['userId'], $image, $updatetime);
				header("Location: ../user_profile/userprofile.php");
			} else {
				$_SESSION['message'] = 'failed';
				header("Location: ../admin_pages/categories.php");
			}
		}
	}
?>