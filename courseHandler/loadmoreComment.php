<?php
require_once("../repo/commentRepo.php");

$courseId = "";
if (isset($_POST["courseId"])) {
	$courseId = $_POST["courseId"];
}
else {
	die("Failed to loadmore comment");
}

$index = 0;
if (isset($_POST["index"])) {
	$index = $_POST["index"];
}
else {
	die("Failed to loadmore comment");
}

$comments = getTenCommentsByCourseId($courseId, $index);
if ($comments != null && count($comments) > 0) {
?>
<?php
    foreach ($comments as $comment) {
        $user = getUser($comment["userId"]);
        $name = "Unknown";
        if ($user != null){
        $name = $user["fullname"];
    	}
    echo '<div class="each-comment">
            <h5>'.$name.'</h5>
            <p>'.$comment["detail"].'<br>'.$comment["createtime"].'</p>
          </div>';
	}
?>

<?php
}

if (count($comments) == 10) {
    $index += 10;
    echo '<div class="loadbutton">
    		<input id="comment_index" hidden value="'.$index.'"/>
            <button class="loadmore btn-primary" data-page="2">See More</button>
          </div>';
}

