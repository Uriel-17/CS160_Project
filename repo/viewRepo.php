<?php
require_once('../db/dbhelper.php');

function getAllViews() {
	$sql = 'SELECT * FROM watch';
	return executeResult($sql);
}


function getViewsByUserId($userId) {
	$sql = 'SELECT courseId FROM watch WHERE userId = '.$userId.' ORDER BY createtime DESC';
	return executeResult($sql);
}

function getViewsCountByCourseId($courseId) {
	$sql = 'SELECT watchId, count(watchId) as total FROM watch WHERE courseId = '.$courseId;
	return executeSingleResult($sql);
}

function getView($watchId) {
	$sql = 'SELECT * FROM watch WHERE watchId = '.$watchId;
	return executeSingleResult($sql);
}

function getViewsCountByUserId($userId) {
	$sql = 'SELECT courseId, count(courseId) as total FROM course WHERE courseId IN (SELECT courseId FROM watch WHERE userId = '.$userId.' ORDER BY createtime DESC)';
	return executeSingleResult($sql);
}

function getViewsLimit($userId, $index, $limit) {
	$sql = 'SELECT * FROM course WHERE courseId IN (SELECT courseId FROM watch WHERE userId = '.$userId.' ORDER BY createtime DESC) LIMIT '.$index.', '.$limit;
	return executeResult($sql);
}

function createView($userId, $courseId, $createtime) {
	$sql = 'INSERT INTO watch (userId, courseId, createtime) VALUES ('.$userId.', '.$courseId.', "'.$createtime.'")';

	return execute($sql);
}

function deleteView($watchId) {
	$sql = 'DELETE FROM watch WHERE watchId = '.$watchId;

	return execute($sql);
}
?>
