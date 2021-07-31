<?php
require_once("../repo/categoryRepo.php");

if (isset($_POST["categoryId"])) {
	$result = deleteCategory($_POST["categoryId"]);
}
else {
	die("Failed to delete!");
}
?>