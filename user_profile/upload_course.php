<?php
require_once('../repo/courseRepo.php');
$title = 'upload course page';
$currentPage = 'upload_course';
include('../shared_layout/header.php');
?>

<section class="profilebody">
    <div class="container">
        <div class="row">
            <div class="profile-nav col-lg-3">
                <?php
                            include('profile_nav.php');
                        ?>

            </div>
            <div class="profile-info col-lg-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        <h2>Uploaded Courses</h2>
                        <h3>Check or upload courses from here</h3>
                    </div>

                    <div class="panel-body uploaded-course">

                        <div class="row">
                            <?php
                            $page_limit = 6;
                            $page_index = 1;
                            if (isset($_GET['page'])) {
                                $page_index = $_GET['page'];
                            }
                            $index = ($page_index - 1) * $page_limit;
                            $userId = $_SESSION["userId"];
                            $count_result = getCoursesCountByUserId($userId);
                            $count = 0;
                            if ($count_result != null && count($count_result) > 0) {
                                $count = $count_result["total"];
                            }
                            $pages = ceil($count / $page_limit);
                            if ($count > 0) {
                                $listCourse = getCoursesLimitByUserId($userId, $index, $page_limit);
                                foreach ($listCourse as $course) {
                                    echo '<div class="col-sm-4 my-1">
                                            <div class="card text-center">
                                                <a href="../courses/course.php?id='.$course["courseId"].'">
                                                    <img class="card-img-top" src="../images/course_img/'.$course["image"].'" alt="Card image"
                                                    style="width:100%">
                                                </a>
                                                <div class="card-body">
                                                    <a href="../courses/course.php?id='.$course["courseId"].'">
                                                        <p class="card-title">'.$course["courseTitle"].'</p>
                                                    </a>
                                                     <p class="card-text">'.$course["description"].'</p>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination m-2 justify-content-center">
                                <?php
                                if ($page_index > 1) {
                                    echo '<li class="page-item">
                                            <a class="page-link" href="?page='.($page_index - 1).'" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>';
                                }
                                for ($i=1; $i <= $pages; $i++) {
                                    if ($page_index == $i) {
                                        echo '<li class="page-item active"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                    }
                                    else {
                                        echo '<li class="page-item"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                                    }
                                }
                                if ($page_index < $pages) {
                                    echo '<li class="page-item">
                                            <a class="page-link" href="?page='.($page_index + 1).'" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>';
                                }
                                ?>
                            </ul>
                        </nav>
                        <a class="upload-button btn-secondary" href="upload.php">Upload your course</a>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</section>


<?php
    include('../shared_layout/footer.php');
?>