<?php
require_once('../db/dbhelper.php');

// get all users from database
function getAllUsers() {
	$sql = 'SELECT * FROM user';
	return executeResult($sql);
}


function getUserById($id) {
	$sql = 'SELECT * FROM user WHERE userId = '.$id;
	return executeSingleResult($sql);
}


function updateUserType($id, $type, $updatetime) {
	$sql = 'UPDATE user
    SET accountTypeId = "'.$type.'",
        updatetime = "'.$updatetime.'"
    WHERE userId = '.$id;
	return execute($sql);
}


function updateUserPassword($id, $password, $updatetime) {
	$sql = 'UPDATE user
    SET password = "'.$password.'",
        updatetime = "'.$updatetime.'"
    WHERE userId = '.$id;
	return execute($sql);
}

function updateUserImage($id, $image, $updatetime) {
	$sql = 'UPDATE user
    SET profileImage = "'.$image.'",
        updatetime = "'.$updatetime.'"
    WHERE userId = '.$id;
	return execute($sql);
}

function deleteUser($id) {
	$sql = 'DELETE FROM user WHERE userId = '.$id;
	return execute($sql);
}