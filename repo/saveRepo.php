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

function getSavedCoursesCountByUserId($userId) {
	$sql = 'SELECT courseId, count(courseId) as total FROM savedcourse WHERE userId = '.$userId;
	return executeSingleResult($sql);
}

function getSavedCourse($userId, $courseId) {
	$sql = 'SELECT * FROM savedcourse WHERE courseId = '.$courseId.' AND userId = '.$userId;
	return executeSingleResult($sql);
}

function getSavedCourses($userId, $index, $limit) {
	$sql = 'SELECT * FROM course WHERE courseId IN (SELECT courseId FROM savedcourse WHERE userId = '.$userId.' ORDER BY createtime DESC) LIMIT '.$index.', '.$limit;
	return executeResult($sql);
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
