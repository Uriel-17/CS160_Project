<?php
require_once("../db/config.php");
$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
if (!$con) {
	echo "Failed to connect with server!";
}
else {
	echo "Connected to server successfully!";
}
?>