<?php 
require_once('../db/dbhelper.php');

function getAllRatings() {
	$sql = 'SELECT * FROM rating';
	return executeResult($sql);
}

function getRatingByCourseId($courseId) {
	$sql = 'SELECT * FROM rating WHERE courseId = '.$courseId;

	return executeResult($sql);
}

function getRatingByUserId($userId) {
	$sql = 'SELECT * FROM rating WHERE userId = '.$userId;
	return executeResult($sql);
}

function getRating($userId, $courseId) {
	$sql = 'SELECT * FROM rating WHERE courseId = '.$courseId.' AND userId = '.$userId;
	return executeSingleResult($sql);
}

function createRating($userId, $courseId, $rateScore, $createtime, $updatetime) {
	$sql = 'INSERT INTO rating VALUES ('.$userId.', '.$courseId.', '.$rateScore.', "'.$createtime.'", "'.$updatetime.'")';

	return execute($sql);
}

function updateRating($userId, $courseId, $rateScore, $updatetime) {
	$sql = 'UPDATE rating
    SET rateScore = '.$rateScore.',
        updatetime = "'.$updatetime.'"
    WHERE userId = '.$userId.' AND courseId = '.$courseId;
	return execute($sql);
}

function deleteRating($userId, $courseId) {
	$sql = 'DELETE FROM rating WHERE userId = '.$userId.' AND courseId = '.$courseId;

	return execute($sql);
}
?>