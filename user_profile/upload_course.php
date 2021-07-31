<?php
require_once('../repo/courseRepo.php');
require_once('../repo/categoryRepo.php');
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
                                    $image_path = "";
                                    if ($course["image"] != null && $course["image"] != "") {
                                        $image_path = '../images/course_img/'.$course["image"];
                                    }
                                    else {
                                        $image_path = '../images/course_img/default.jpg';
                                    }
                                    echo '<div class="col-sm-4 my-1">
                                            <div class="card text-center">
                                                <a href="../courses/course.php?id='.$course["courseId"].'">
                                                    <img class="card-img-top" src="'.$image_path.'" alt="No Image"
                                                    style="width:100%">
                                                </a>
                                                <div class="card-body">
                                                    <input type="text" name="courseId" class="form-control" value="'.$course["courseId"].'" hidden>
                                                    <a href="../courses/course.php?id='.$course["courseId"].'">
                                                        <p class="card-title">'.$course["courseTitle"].'</p>
                                                    </a>
                                                    <p class="card-text">'.$course["description"].'</p>
                                                </div>
                                                <div>
                                                    <button class="edit btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-pencil-alt" title="Edit"></i>
                                                        </button>
                                                        <button class="delete btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash" title="Delete"></i>
                                                        </button>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            }
                            ?>
                        </div>
                        <!--Edit modal-->
                         <div id="editCourseModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="../courseHandler/editCourse.php" method="post" enctype="multipart/form-data">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit Course Info
                                             </h5>
                                             <button type="button" id="edit_close2" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                            <input type="text" id="edit_id" name="courseId" class="form-control" hidden>
                                             <div class="form-group">
                                                 <label for="courseTitle">Course Title</label>
                                                 <input type="text" id="title" name="courseTitle" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="author">Author</label>
                                                 <input type="text" id="author" name="author" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                <label for="categoryid">Category</label>
                                                 <select class="form-control" id="categories" name="categoryId">
                                                    <option value="">
                                                        Please Select a Category
                                                    </option>
                                                    <!-- Start of php code for category list -->
                                                    <?php
                                                    $categoryList = getAllCategoriesInOrder();
                                                    if (!empty($categoryList)) {
                                                        foreach($categoryList as $category) {
                                                            echo '<option value="'.$category["categoryId"].'">'.$category["categoryname"].'</option>';
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                 <label for="description">Description</label>
                                                 <input type="text" id="description" name="description" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="url">url</label>
                                                 <input type="url" id="url" name="url" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
                                                 <input type="file" id="image" name="image" accept="image/*" class="form-control">
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" id="edit_close" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <button type="submit" id="edit_course" class="btn btn-success">Edit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>


                         <!--Delete modal-->
                         <div id="deleteCourseModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <div class="modal-header">
                                         <h5 class="modal-title" style="color:black;">Delete Course
                                         </h5>
                                         <button type="button" id="delete_close2" class="close" data-dismiss="modal" aria-label="close"
                                             aria-hidden="true">&times;
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <h6>Are you sure you want to delete these records?</h6>
                                         <p>This action cannot be undone</p>
                                     </div>
                                     <div class="modal-footer">
                                         <input type="button" id="delete_close" class="btn btn-dafault" data-dismiss="modal"
                                             Value="Cancel">
                                         <input type="button" id="delete_course" class="btn btn-danger" value="Delete" />
                                     </div>
                                 </div>

                             </div>
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
                        <a class="profile-button btn-secondary" href="upload.php">Upload your course</a>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</section>

<script src="../my_js/dashboard.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
 </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
 </script>

<script>
    $(document).ready(function () {
        $('button.delete').on('click', function(e) {
            e.preventDefault();
            var id = $(this).parent().parent().find("input[name=courseId]").val()
            $("#deleteCourseModal").data('id', id).modal('show');
        })

        $("#delete_close").click(function() {
            $("#deleteCourseModal").modal('toggle');
        })

        $("#delete_close2").click(function() {
            $("#deleteCourseModal").modal('toggle');
        })

        $('button.edit').on('click', function(e) {
            e.preventDefault();
            var id = $(this).parent().parent().find("input[name=courseId]").val()
            $("#edit_id").val(id);
            $("#editCourseModal").data('id', id).modal('show');
        })

        $("#edit_close").click(function() {
            $("#editCourseModal").modal('toggle');
        })

        $("#edit_close2").click(function() {
            $("#editCourseModal").modal('toggle');
        })
        
        $("#delete_course").click(function() {
            var id = $("#deleteCourseModal").data('id');
            $.ajax({
            type: "POST",
            url: "/CS160_Project/admin_handler/deleteCourse.php",
            data: {
                "courseId": id
            },
            success: function(result) {
                $("#deleteCourseModal").modal('toggle');
                location.reload();
            },
            failure: function(result) {
                alert(result);
            },
            error: function(result) {
                alert(result);
            }
        })
        })
    })
</script>


<?php
    include('../shared_layout/footer.php');
?>
