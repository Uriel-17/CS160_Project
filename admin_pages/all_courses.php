<?php
require_once("../repo/courseRepo.php");
require_once("../repo/categoryRepo.php");
$title = 'Course';
$currentPage = 'all_courses';

include('../shared_layout/header.php');
?>

 <head>
     <link rel="stylesheet" href="../my_css/dashboard.css">
    
 </head>

 <section class="dashboardbody">
     <div class="container" style="max-width:100%;">
         <div class="row">
             <div class="profile-nav col-lg-2">
                 <?php 
                      include('dashboard_nav.php')
                ?>
             </div>
             <div class="profile-info col-lg-10">
                 <div class="panel">
                     <div class="bio-graph-heading">
                         <h1>Courses</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div>
                                     <h5>Manage <b>Courses</b></h5>
                                 </div>
                             </div>
                         </div>
                         <div style="overflow-x:auto;">
                             <table id="example1" class="table table-striped table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             No.
                                         </th>
                                         <th>Course Id</th>
                                         <th>Course Title</th>
                                         <th>Category Id</th>
                                         <th>Description</th>

                                         <th>URL</th>
                                         <th>Image</th>
                                         <th>Create Time</th>
                                         <th>Update Time</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                    <?php
                                    $course_list = getAllCourses();
                                    $i = 1;
                                    if ($course_list != null && count($course_list) > 0) {
                                        foreach($course_list as $course) {
                                            $image = $course["image"] == "" ? "default.jpg" : $course["image"];
                                            echo '<tr data-id="'.$course['courseId'].'">
                                                     <td>'.$i++.'</td>
                                                     <td>'.$course["courseId"].'</td>
                                                     <td><a href="../courses/course.php?id='.$course['courseId'].'">'.$course["courseTitle"].'</a></td>
                                                     <td>'.$course["categoryId"].'</td>
                                                     <td>'.$course["description"].'</td>
                                                     <td>'.$course["url"].'</td>
                                                     <td><img src="../images/course_img/'.$image.'" alt="" border=1 height=100 width=100></img></td>
                                                     <td>'.$course["createtime"].'</td>
                                                     <td>'.$course["updatetime"].'</td>

                                                     <td>
                                                        <button class="delete btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash" title="Delete"></i>
                                                        </button>
                                                     </td>
                                                 </tr>';
                                        }
                                    }
                                    ?>
                                </tbody>
                             </table>
                         </div>

                         <!--Edit modal-->
                         <div id="editCourseModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="" method="post" enctype="multipart/form-data">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit Course Info
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="courseTitle">Course Title</label>
                                                 <input type="text" id="title" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                <label for="categoryid">Category</label>
                                                 <select class="form-control" id="categories" name="categoryid" required>
                                                    <option value="">Please Select a Category
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
                                                 <input type="text" id="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="url">url</label>
                                                 <input type="url" id="url" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
                                                 <input type="file" id="image" accept="image/*" class="form-control" required>
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <input type="button" id="add_user" class="btn btn-info" value="Save" />
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
                                         <button type="button" class="close" data-dismiss="modal" aria-label="close"
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
 

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script defer type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script defer type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
 <script>
    $(document).ready(function () {
        $('#example1').DataTable();

        $('button.delete').on('click', function(e) {
            e.preventDefault();
            var id = $(this).closest('tr').data('id');
            $("#deleteCourseModal").data('id', id).modal('show');
        })

        $(".close").click(function() {
            $("#deleteCourseModal").modal('toggle');
        })

        $("#delete_close").click(function() {
            $("#deleteCourseModal").modal('toggle');
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
                location.reload()
            },
            failure: function(result) {
                alert(result);
            },
            error: function(result) {
                alert(result);
            }
        })
        })
    });
    </script>


 <?php
    include('../shared_layout/footer.php');
?>