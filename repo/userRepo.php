<?php
require_once('../db/dbhelper.php');

// get all users from database and return an user array
function getAllUsers() {
	$sql = 'CALL GetAllUsers()';
	return executeResult($sql);
}

// get a single user by user id
function getUserById($id) {
	$sql = 'CALL GetUserById('.$id.')';
	return executeSingleResult($sql);
}

// get a single user by username and password
function getUserByAccount($username, $password) {
	$sql = 'CALL GetUserByAccount("'.$username.'", "'.$password.'")';
	return executeSingleResult($sql);
}

// create a new user
// accountTypeId is an INT, 1 for basic user, 2 for content creator, 3 for administator
// profile image should just store the image's file name (hello.png)
// createtime and updatetime should be get from date('Y-m-d H:i:s')
function createUser($username, $password, $accountTypeId, $profileImage, $fullname, $dateofbirth, $email, $phonenumber, $createtime, $updatetime) {
	$sql = 'CALL CreateUser("'.$username.'", "'.$password.'", '.$accountTypeId.', "'.$profileImage.'", "'.$fullname.'", "'.$dateofbirth.'", "'.$email.'", "'.$phonenumber.'", "'.$createtime.'", "'.$updatetime.'")';
	execute($sql);
}

// create a current user by user id
// accountTypeId is an INT, 1 for basic user, 2 for content creator, 3 for administator
// profile image should just store the image's file name (hello.png)
// updatetime should be get from date('Y-m-d H:i:s')
function updateUser($id, $accountTypeId, $profileImage, $fullname, $dateofbirth, $email, $phonenumber, $updatetime) {
	$sql = 'CALL UpdateUser('.$id.', '.$accountTypeId.', "'.$profileImage.'", "'.$fullname.'", "'.$dateofbirth.'", "'.$email.'", "'.$phonenumber.'", "'.$updatetime.'")';
	execute($sql);
}

// delete a user by user id
function deleteUser($id) {
	$sql = 'CALL DeleteUser('.$id.')';
	execute($sql);
}

// change account password by user id
function changePassword($id, $newpassword) {
	$sql = 'CALL ChangePassword('.$id.', "'.$newpassword.'")';
	execute($sql);
}

// set user status
// true for active user
// false for inactive or banned
// don't need to use it right now
function setUserStatus($id, $status) {
	$sql = 'CALL SetUserStatus('.$id.', '.$status.')';
	execute($sql);
}