<?php
require_once('../db/dbhelper.php');
require_once('ratingRepo.php');

function getAllCourses() {
	$sql = 'SELECT * FROM course';
	return executeResult($sql);
}

function getCourseById($courseId) {
	$sql = 'SELECT * FROM course WHERE courseId = '.$courseId;
	return executeSingleResult($sql);
}

function getCoursesByUserId($userId) {
	$sql = 'SELECT * FROM course WHERE userId = '.$userId;
	return executeResult($sql);
}

function getCoursesByCategoryId($categoryId) {
	$sql = 'SELECT * FROM course WHERE categoryId = '.$categoryId;
	return executeResult($sql);
}

function createCourse($courseTitle, $description, $categoryId, $author, $userId, $url, $image, $createtime, $updatetime) {
	$sql = 'INSERT INTO course (courseTitle, description, categoryId, author, userId, url, image, createtime, updatetime)
    VALUES ("'.$courseTitle.'", "'.$description.'", '.$categoryId.', "'.$author.'", '.$userId.', "'.$url.'", "'.$image.'", "'.$createtime.'", "'.$updatetime.'")';
	return execute($sql);
}

function updateCourse($courseId, $courseTitle, $description, $categoryId, $author, $url, $image, $updatetime) {
	$sql = 'UPDATE course
    SET courseTitle = "'.$courseTitle.'",
		description = "'.$description.'",
        categoryId = '.$categoryId.',
        author = "'.$author.'",
        url = "'.$url.'",
        image = "'.$image.'",
        updatetime = "'.$updatetime.'"
    WHERE courseId = '.$courseId;
	return execute($sql);
}

function deleteCourse($courseId) {
	$sql = 'DELETE FROM course WHERE courseId = '.$courseId;
	return execute($sql);
}

function computeAverageRating($courseId) {
	$ratings = getRatingByCourseId($courseId);
	$count = count($ratings);
	$total = 0;

	foreach ($ratings as $item) {
		$total += $item['ratescore'];
	}

	return $total / $count;
}

function computeNumberOfRatings($courseId) {
	$ratings = getRatingByCourseId($courseId);
	return count($ratings);
}
