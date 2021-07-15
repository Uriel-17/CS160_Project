<?php
if (!isset($_GET["id"])) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    exit;
}
require_once('../repo/courseRepo.php');
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
                        <iframe class="embed-responsive-item"
                            src="'.$course["url"].'"></iframe>
                    </div>';
            }
            else {
                echo '<div>
                        <img src="images/course_img/'.$course["image"].'" alt="'.$course["courseTitle"].'">
                    </div>';
                echo '<div>
                        <a href="'.$course["url"].'">'.$course["url"].'</a>
                    </div>';
            }
            ?>

            <div class="video-description">
                <div class="container">
                    <div class="row ">

                        <div class=" col-lg-6 text-center">

                        </div>
                        <div class="items col-lg-6">

                            <ul class="buttons">
                                <li>
                                    <span>45 ratings</span> <span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                </li>
                                <li>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal"
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
                                                            <label for="rate-5" class="fas fa-star" ></label>
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

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <input type="button" id="save_rate" class="btn btn-primary" value="Save changes"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </li>
                                <li style="float:right">
                                    <input type="button" id="save_course" class="btn btn-primary" value="Save" />
                                </li>
                                <li style="float:right"> <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#report">
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
                                                            <input type="radio" name="report" id="report-1" value="Sexual content">
                                                            <label for="report-1">Sexual content</label><br />
                                                            <input type="radio" name="report" id="report-2" value="Violent or abusive content">
                                                            <label for="report-2">Violent or abusive content</label><br />
                                                            <input type="radio" name="report" id="report-3" value="Hateful or abusive content">
                                                            <label for="report-3">Hateful or abusive content</label><br />
                                                            <input type="radio" name="report" id="report-4" value="Harassment of bullying">
                                                            <label for="report-4">Harassment of bullying</label><br />
                                                            <input type="radio" name="report" id="report-5" value="Spam or misleading">
                                                            <label for="report-5">Spam or misleading</label>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <input type="button" id="save_report" class="btn btn-primary" value="Save changes"/>
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
            <form action="" method="post">
                <textarea name="comment" id="comment" cols="45" rows="10" placeholder="Add your comment"></textarea><br>
                <div class="btn">
                    <input type="submit" class="submit" value='Comment' id="new_comment">
                    <button id='clear'>Clear</button>
                </div>
            </form>

        </div>


        <div class="all-comments">
            <h4>All Comments</h4>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination m-2 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</section>
<script src="../my_js/course.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var courseId = $("#courseId").val()
        var ratingNumber = 0
        var report_detail = ""

        $(".star-widget input").click(function () {
            ratingNumber = $(this).val()
            
        })

        $("#save_rate").click(function () {
            $.ajax({
            type: "POST",
            url: "/CS160_Project/ratingHandler.php",
            data: { "courseId" : courseId, "rate" : ratingNumber},
            success: function () {
                    window.alert("Success")
                },
                failure: function () {
                    window.alert("Failed")
                },
                error: function () {
                    window.alert("Error")
                }
        })
        })

        $("#save_course").click(function () {
            $.ajax({
            type: "POST",
            url: "/CS160_Project/saveCourseHandler.php",
            data: { "courseId" : courseId},
            success: function () {
                    $("#save_course").val("Saved")
                },
                failure: function () {
                    window.alert("Failed")
                },
                error: function () {
                    window.alert("Error")
                }
        })
        })

        $(".report-list input").click(function () {
            report_detail = $(this).val()
            
        })

        $("#save_report").click(function () {
            $.ajax({
            type: "POST",
            url: "/CS160_Project/reportHandler.php",
            data: { "courseId" : courseId, "report" : report_detail},
            success: function () {
                    window.alert("Success")
                },
                failure: function () {
                    window.alert("Failed")
                },
                error: function () {
                    window.alert("Error")
                }
        })
        })
        
    })
</script>



<?php
    include('../shared_layout/footer.php');
?>
