<?php
require_once('../db/dbhelper.php');

// get all categories from database
function getAllCategories() {
	$sql = 'SELECT * FROM category';
	return executeResult($sql);
}

// get an category by its id
function getCategoryById($id) {
	$sql = 'SELECT * FROM category WHERE categoryId = '.$id;
	return executeSingleResult($sql);
}

// priority is for sorting
function createCategory($categoryName, $description, $image, $priority, $createtime, $updatetime) {
	$sql = 'INSERT INTO category (categoryname, description, image, priority, createtime, updatetime)
    VALUES ("'.$categoryName.'", "'.$description.'", "'.$image.'", '.$priority.', "'.$createtime.'", "'.$updatetime.'")';
	return execute($sql);
}

// update new category
function updateCategory($id, $categoryName, $description, $image, $priority, $updatetime) {
	$sql = 'UPDATE category
    SET categoryname = "'.$categoryName.'",
		description = "'.$description.'",
        image = "'.$image.'",
        priority = '.$priority.',
        updatetime = "'.$updatetime.'"
    WHERE categoryId = '.$id;
	return execute($sql);
}

// delete category
function deleteCategory($id) {
	$sql = 'DELETE FROM category WHERE categoryId = '.$id;
	return execute($sql);
}

// get all categories in database but order by priority
function getAllCategoriesInOrder() {
	$sql = 'SELECT * FROM category ORDER BY priority';
	return executeResult($sql);
}

// $createtime = $updatetime = date('Y-m-d H:i:s');
// $categoryName = 'PHP';
// $description = 'PHP is a general-purpose scripting language especially suited to web development.';
// $image = 'php_img.png';
// $priority = 1;

// echo $categoryName.'</br>';
// echo $description.'</br>';
// echo $image.'</br>';
// echo $priority.'</br>';
// echo $createtime.'</br>';
// echo $updatetime.'</br>';
// echo 'CALL CreateCategory("'.$categoryName.'", "'.$description.'", "'.$image.'", '.$priority.', "'.$createtime.'", "'.$updatetime.'")';
// createCategory($categoryName, $description, $image, $priority, $createtime, $updatetime);