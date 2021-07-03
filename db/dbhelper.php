<?php
require_once ('config.php');

// this method is for executing queries that don't need return item
// primary for insert, update, delete
function execute($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//insert, update, delete
	$result = mysqli_query($con, $sql);

	//close connection
	mysqli_close($con);
	return $result;
}

// this method is for executing queries that request a return of a table of data
// this method will return a fetched data array
// primary for select multiple items from database
function executeResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//select
	$result = mysqli_query($con, $sql);
	$data   = [];
	while ($row = mysqli_fetch_array($result, 1)) {
		$data[] = $row;
	}

	//close connection
	mysqli_close($con);

	return $data;
}

// this method is for executing queries that request a return of a single row data
// this method will return a fetched data item
// primary for select single item from database
function executeSingleResult($sql) {
	//save data into table
	// open connection to database
	$con = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	//select
	$result = mysqli_query($con, $sql);
	$row    = mysqli_fetch_array($result, 1);

	//close connection
	mysqli_close($con);

	return $row;
}

// <?php

// $uploaddir = '/image/user_image/';
// $profileImage = basename($_FILES['image']['name']);
// $uploadfile = $uploaddir . basename($_FILES['image']['name']);

// echo "<p>";

// if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
//   echo "File is valid, and was successfully uploaded.\n";
// } else {
//    echo "Upload failed";
// }

// echo "</p>";
// echo '<pre>';
// echo 'Here is some more debugging info:';
// print_r($_FILES);
// print "</pre>";

// ?> 