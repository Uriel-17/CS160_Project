<?php
require_once("../repo/commentRepo.php");

$commentList = getAllComments();

var_dump($commentList);
?>