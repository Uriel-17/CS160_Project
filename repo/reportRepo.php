<?php 
require_once('../db/dbhelper.php');

function getAllReports() {
	$sql = 'SELECT * FROM report';
	return executeResult($sql);
}

function getReportsByCourseId($courseId) {
	$sql = 'SELECT * FROM report WHERE courseId = '.$courseId;

	return executeResult($sql);
}

function getReportsByUserId($userId) {
	$sql = 'SELECT * FROM report WHERE userId = '.$userId;
	return executeResult($sql);
}

function getReports($userId, $courseId) {
	$sql = 'SELECT * FROM report WHERE courseId = '.$courseId.' AND userId = '.$userId;
	return executeResult($sql);
}

function getReport($id) {
	$sql = 'SELECT * FROM report WHERE reportId = '.$id;
	return executeSingleResult($sql);
}

function createReport($userId, $courseId, $detail, $createtime, $updatetime) {
	$sql = 'INSERT INTO report (userId, courseId, detail, createtime, updatetime) VALUES ('.$userId.', '.$courseId.', "'.$detail.'", "'.$createtime.'", "'.$updatetime.'")';

	return execute($sql);
}

function updateReport($id, $detail, $updatetime) {
	$sql = 'UPDATE report
    SET detail = '.$detail.',
        updatetime = "'.$updatetime.'"
    WHERE reportId = '.$id;
	return execute($sql);
}

function deleteReport($id) {
	$sql = 'DELETE FROM report WHERE reportId = '.$id;

	return execute($sql);
}
?>