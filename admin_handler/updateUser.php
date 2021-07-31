<?php
require_once("../repo/userRepo.php");

if (!isset($_POST["userId"])) {
	header("Location: ../admin_pages/users.php");
}
else {
	$edit_result = false;
	$updatetime = date('Y-m-d H:i:s');
	$userId = $_POST["userId"];
	$user = getUserById($userId);
	if ($cate == null || count($cate) == 0) {
		header("Location: ../admin_pages/users.php");
	}


	if (isset($_POST["accounttype"])) {
		if ($_POST["accounttype"] != "") {
			$type = $_POST["accounttype"];
			$edit_result = updateUserType($userId, $type, $updatetime);
		}
	}

	if (isset($_POST["password"])) {
		if ($_POST["password"] != "") {
			$password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
			$edit_result = updateUserPassword($userId, $password, $updatetime);
		}
	}

	if ($edit_result === false) {
		header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	}
	else {
		header("Location: ../admin_pages/users.php");
	}
}
?>