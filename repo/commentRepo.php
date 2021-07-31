<?php 
require_once('../db/dbhelper.php');

function getAllComments() {
	$sql = 'SELECT * FROM comment';
	return executeResult($sql);
}

function getCommentsByCourseId($courseId) {
	$sql = 'SELECT * FROM comment WHERE courseId = '.$courseId;

	return executeResult($sql);
}

function getTenCommentsByCourseId($courseId, $index) {
	$sql = 'SELECT * FROM comment WHERE courseId = '.$courseId.' ORDER BY createtime DESC LIMIT '.$index.', 10';

	return executeResult($sql);
}

function getUser($userId) {
	$sql = 'SELECT * FROM user WHERE userId = '.$userId;

	return executeSingleResult($sql);
}

function getCommentsByUserId($userId) {
	$sql = 'SELECT * FROM comment WHERE userId = '.$userId;
	return executeResult($sql);
}

function getComments($userId, $courseId) {
	$sql = 'SELECT * FROM comment WHERE courseId = '.$courseId.' AND userId = '.$userId;
	return executeResult($sql);
}

function getComment($id) {
	$sql = 'SELECT * FROM comment WHERE commentId = '.$id;
	return executeSingleResult($sql);
}

function createComment($userId, $courseId, $detail, $createtime, $updatetime) {
	$sql = 'INSERT INTO comment (userId, courseId, detail, createtime, updatetime) VALUES ('.$userId.', '.$courseId.', "'.$detail.'", "'.$createtime.'", "'.$updatetime.'")';

	return execute($sql);
}

function updateComment($id, $detail, $updatetime) {
	$sql = 'UPDATE comment
    SET detail = '.$detail.',
        updatetime = "'.$updatetime.'"
    WHERE commentId = '.$id;
	return execute($sql);
}

function deleteComment($id) {
	$sql = 'DELETE FROM comment WHERE commentId = '.$id;

	return execute($sql);
}
?>