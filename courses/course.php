<?php
if (!isset($_GET["id"])) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}
require_once('../repo/courseRepo.php');
require_once('../repo/viewRepo.php');
require_once("../repo/saveRepo.php");
require_once('../repo/commentRepo.php');
require_once('../Utilities/URL.php');
$courseId = $_GET["id"];

$course = getCourseById($courseId);
if ($course == null || count($course) <= 0) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}


$title = 'Course-content page'; 
$currentPage = 'Course Page';
include('../shared_layout/header.php');
if (isset($_SESSION["userId"])) {
    $createtime = date('Y-m-d H:i:s');
    createView($_SESSION["userId"], $courseId, $createtime);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/course.css" />


</head>

<section class="course-body">
    <div class="container">
        <div class="video-content">
            <input id="courseId" value="<?php echo $courseId?>" hidden />
            <?php
            if (isYoutube($course["url"])) {
                $embed_url = toEmbed($course["url"]);
                echo '<div class="iframe-container">
                        <iframe class="embed-responsive-item"
                            src="'.$embed_url.'"></iframe>
                    </div>';
            }
            elseif (isEmbedYoutube($course["url"])) {
                echo '<div class="iframe-container">
                        <iframe id="play" class="embed-responsive-item"
                            src="'.$course["url"].'"></iframe>
                    </div>';
            }
            else {
                if ($course["image"] != null || $course["image"] != "") {
                    echo '<div class="text-center">
                        <img src="../images/course_img/'.$course["image"].'" alt="'.$course["courseTitle"].'">
                    </div>';
                }
                else {
                    echo '<div class="text-center">
                        <img src="../images/course_img/default.jpg" alt="'.$course["courseTitle"].'">
                    </div>';
                }
                
                echo '<div>
                        <a id="play" href="'.$course["url"].'">URL: '.$course["url"].'</a>
                    </div>';
            }
            ?>

            <div class="video-description">
                <div class="container">
                    <div class="row ">
                        <div class="items float-right">

                            <ul class="buttons" style="float: right;">
                                <li>
                                    <?php
                                    $rating_count = computeNumberOfRatings($courseId);
                                    $avg_rating = computeAverageRating($courseId);
                                    ?>
                                    <span id="rating_count"><?php echo $rating_count; ?> rating(s)</span>
                                    <span class="ratings">
                                        <i id="start-one" class="fa fa-star" <?php if ($avg_rating >= 1) {echo 'style="color: yellow"';}?>></i>
                                        <i id="star-two" class="fa fa-star" <?php if ($avg_rating >= 2) {echo 'style="color: yellow"';}?>></i>
                                        <i id="star-three" class="fa fa-star" <?php if ($avg_rating >= 3) {echo 'style="color: yellow"';}?>></i>
                                        <i id="star-four" class="fa fa-star" <?php if ($avg_rating >= 4) {echo 'style="color: yellow"';}?>></i>
                                        <i id="star-five" class="fa fa-star" <?php if ($avg_rating >= 5) {echo 'style="color: yellow"';}?>></i>
                                    </span>
                                </li>
                                <li>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#rate">
                                        Rate
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="rate" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="rate-title" style="color:black;">Rate
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="star-container">
                                                        <div class="star-widget">
                                                            <input type="radio" name="rate" id="rate-5" value="5">
                                                            <label for="rate-5" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-4" value="4">
                                                            <label for="rate-4" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-3" value="3">
                                                            <label for="rate-3" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-2" value="2">
                                                            <label for="rate-2" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-1" value="1">
                                                            <label for="rate-1" class="fas fa-star"></label>

                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <p id="result" style="color: black;"></p>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                        id="close_rate">Close</button>
                                                    <input type="button" id="save_rate" class="btn btn-primary"
                                                        value="Save changes" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </li>
                                <li style="float:right">
                                    <?php 
                                    if (isset($_SESSION["userId"])) {
                                        $check_save = getSavedCourse($_SESSION["userId"], $courseId);
                                        if ($check_save != null && count($check_save) > 0) {
                                            echo '<input type="button" id="save_course" class="btn btn-primary" value="Unsave" />';
                                        }
                                        else {
                                            echo '<input type="button" id="save_course" class="btn btn-primary" value="Save" />';
                                        }
                                    }
                                    else {
                                        echo '<input type="button" id="save_course" class="btn btn-primary" value="Save" />';
                                    }
                                    ?>

                                </li>
                                <li style="float:right"> <button type="button" class="btn btn-primary"
                                        data-toggle="modal" data-target="#report">
                                        Report
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="report" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="report-title" style="color:black;">
                                                        Report video</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="report-container">

                                                        <div class="report-list">
                                                            <input type="radio" name="report" id="report-1"
                                                                value="Sexual content">
                                                            <label for="report-1">Sexual content</label><br />
                                                            <input type="radio" name="report" id="report-2"
                                                                value="Violent or abusive content">
                                                            <label for="report-2">Violent or abusive
                                                                content</label><br />
                                                            <input type="radio" name="report" id="report-3"
                                                                value="Hateful or abusive content">
                                                            <label for="report-3">Hateful or abusive
                                                                content</label><br />
                                                            <input type="radio" name="report" id="report-4"
                                                                value="Harassment of bullying">
                                                            <label for="report-4">Harassment of bullying</label><br />
                                                            <input type="radio" name="report" id="report-5"
                                                                value="Spam or misleading">
                                                            <label for="report-5">Spam or misleading</label>

                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <p id="report_result" style="color: black;"></p>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                        id="close_report">Cancel</button>
                                                    <input type="button" id="save_report" class="btn btn-primary"
                                                        value="Save changes" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 class="m-b-sm"><?php echo $course["courseTitle"];?></h4>

                <p class="m-t-sm">Author: <?php echo $course["author"];?></p>
                <h5 class="m-b-sm">Course Description</h5>
                <p><?php echo $course["description"];?></p>

            </div>
        </div>
        <div class="comment-box">
            <h4>Comment</h4>
                <textarea name="comment" id="comment" cols="45" rows="10" placeholder="Add your comment"></textarea><br>
                <div class="btn">
                    <input type="submit" class="submit" value='Comment' id="new_comment">
                    <button id='clear'>Clear</button>
                </div>

        </div>


        <div class="all-comments">
            <h4>Comments</h4>
            <?php
            $index = 0;
            $comments = getTenCommentsByCourseId($courseId, $index);

            if ($comments != null && count($comments) > 0) {
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
            }
            else {
                echo '<div class="each-comment">
                                <p>No Comment</p>
                            </div>';
            }

            if (count($comments) == 10) {
                $index += 10;
                echo '<div class="loadbutton">
                            <input id="comment_index" hidden value="'.$index.'"/>
                            <button class="loadmore btn-primary" data-page="2">See More</button>
                        </div>';
            }
            ?>
        </div>

    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    var courseId = $("#courseId").val()
    var ratingNumber = 0
    var report_detail = ""
    var comment_detail = ""



    $(".star-widget input").click(function() {
        ratingNumber = $(this).val()

    })

    $("#save_rate").click(function() {
        $.ajax({
            type: "POST",
            url: "/CS160_Project/courseHandler/ratingHandler.php",
            data: {
                "courseId": courseId,
                "rate": ratingNumber
            },
            success: function(result) {
                $("#result").show()
                $("#result").text(result)
                $("#save_rate").hide()
            },
            failure: function(result) {
                $("#result").show()
                $("#result").text(result)
            },
            error: function(result) {
                $("#result").show()
                $("#result").text(result)
            }
        })
    })

    $("#close_rate").click(function() {
        $("#save_rate").show()
        $("#result").hide()
    })

    $("#save_course").click(function() {
        $.ajax({
            type: "POST",
            url: "/CS160_Project/courseHandler/saveCourseHandler.php",
            data: {
                "courseId": courseId
            },
            success: function(result) {
                $("#save_course").val(result)
            },
            failure: function(result) {
                window.alert("Failed")
            },
            error: function(result) {
                window.alert("Error")
            }
        })
    })

    $(".report-list input").click(function() {
        report_detail = $(this).val()

    })

    $("#save_report").click(function() {
        $.ajax({
            type: "POST",
            url: "/CS160_Project/courseHandler/reportHandler.php",
            data: {
                "courseId": courseId,
                "report": report_detail
            },
            success: function(result) {
                $("#report_result").show()
                $("#report_result").text(result)
                $("#save_report").hide()
            },
            failure: function(result) {
                $("#report_result").show()
                $("#report_result").text(result)
            },
            error: function(result) {
                $("#report_result").show()
                $("#report_result").text(result)
            }
        })
    })

    $("#close_report").click(function() {
        $("#save_report").show()
        $("#report_result").hide()
    })

    $("#new_comment").click(function() {
        comment_detail = $("#comment").val()

        if (comment_detail != "") {
            $.ajax({
            type: "POST",
            url: "/CS160_Project/courseHandler/commentHandler.php",
            data: {
                "courseId": courseId,
                "comment": comment_detail
            },
            success: function(result) {
                $("#comment").val('')
                $(".all-comments").empty()
                $(".all-comments").append(result)
            },
            failure: function(result) {
                alert(result)
            },
            error: function(result) {
                alert(result)
            }
        })
        }
        
    })

    $("#clear").click(function() {
        $("#comment").val('')
    })

    $(".loadmore").click(function() {
        $.ajax({
            type: "POST",
            url: "/CS160_Project/courseHandler/loadmoreComment.php",
            cache: false,
            data: {
                "index" : $("#comment_index").val(),
                "courseId" : courseId
            },
            success: function(result) {
                $(".loadbutton").remove()
                $("#comment").val('')
                $(".all-comments").append(result)
            },
            failure: function(result) {
                alert(result)
            },
            error: function(result) {
                alert(result)
            }
        })


    })
})
</script>



<?php
    include('../shared_layout/footer.php');
?>