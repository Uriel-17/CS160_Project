<?php
require_once('../db/dbhelper.php');

// get all categories from database
function getAllCategories() {
	$sql = 'CALL GetAllCategories()';
	return executeResult($sql);
}

// get an category by its id
function getCategoryById($id) {
	$sql = 'CALL GetCategoryById('.$id.')';
	return executeSingleResult($sql);
}

// priority is for sorting
function createCategory($categoryName, $description, $image, $priority, $createtime, $updatetime) {
	$sql = 'CALL CreateCategory("'.$categoryName.'", "'.$description.'", "'.$image.'", '.$priority.', "'.$createtime.'", "'.$updatetime.'")';
	execute($sql);
}

// update new category
function updateCategory($id, $categoryName, $description, $image, $priority, $updatetime) {
	$sql = 'CALL UpdateCategory('.$id.', "'.$categoryName.'", "'.$description.'", "'.$image.'", '.$priority.', "'.$updatetime.'")';
	execute($sql);
}

// delete category
function deleteCategory($id) {
	$sql = 'CALL DeleteCategory('.$id.')';
	execute($sql);
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
