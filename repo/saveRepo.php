<?php 
require_once('../db/dbhelper.php');

function getAllSavedCourse() {
	$sql = 'SELECT * FROM savedcourse';
	return executeResult($sql);
}


function getSavedCoursesByUserId($userId) {
	$sql = 'SELECT * FROM savedcourse WHERE userId = '.$userId;
	return executeResult($sql);
}

function getSavedCourse($userId, $courseId) {
	$sql = 'SELECT * FROM savedcourse WHERE courseId = '.$courseId.' AND userId = '.$userId;
	return executeSingleResult($sql);
}

function createSavedCourse($userId, $courseId, $createtime) {
	$sql = 'INSERT INTO savedcourse VALUES ('.$userId.', '.$courseId.', "'.$createtime.'")';

	return execute($sql);
}

function deleteSavedCourse($userId, $courseId) {
	$sql = 'DELETE FROM savedcourse WHERE userId = '.$userId.' AND courseId = '.$courseId;

	return execute($sql);
}
?>