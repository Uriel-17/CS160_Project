<?php 
require_once('../db/dbhelper.php');

function getAllFeedback() {
	$sql = 'SELECT * FROM feedback';
	return executeResult($sql);
}

function getFeedback($id) {
	$sql = 'SELECT * FROM feedback WHERE feedbackId = '.$id;
	return executeSingleResult($sql);
}

function createFeedback($userId, $name, $email, $detail, $createtime) {
	$sql = 'INSERT INTO feedback (userId, name, email, detail, createtime) VALUES ('.$userId.', "'.$name.'", "'.$email.'", "'.$detail.'", "'.$createtime.'")';

	return execute($sql);
}

function deleteFeedback($id) {
	$sql = 'DELETE FROM feedback WHERE feedbackId = '.$id;

	return execute($sql);
}
?>