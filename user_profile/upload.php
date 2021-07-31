<?php
  
    $title = 'Upload page'; 
    $currentPage = 'edit_profile';
    require_once("../repo/categoryRepo.php");
    include('../shared_layout/header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/userprofile.css" />

</head>

<section class="upload-course-body">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="upload-info col-lg-9">
                <div class="panel">
                    <div class="load-course-heading">
                        <h2>Upload Course</h2>
                        <h3>Please fill out all the info before uploading your courses.</h3>
                    </div>
                    <div class="panel-upload-body upload-course-info text-light">

                        <form role="form" action="../userHandler/uploadHandler.php" method="post"
                            enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="categories">Course Catogory <span class="required">*</span></label>
                                <div class="input-group">
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
                            </div>
                            <div class="form-group">
                                <label for="author"> Author <span class="required">*</span></label>
                                <input type="text" class="form-control" name="author" id="author" required="required"
                                    placeholder="What is the author of this course?">
                            </div>
                            <div class="form-group">
                                <label for="coursename"> Course Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="coursename" id="coursename"
                                    required="required" placeholder="What is the course name?">
                            </div>

                            <div class="form-group">
                                <label for="description"> Course Description<span class="required">*</span></label>
                                <textarea name="description" id="description" class="form-control" rows="3"
                                    placeholder="Briefly describe the course."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="URL"> Course URL<span class="required">*</span></label>
                                <input class="form-control" type="text" name="URL" id="URL" placeholder="Course URL">

                            </div>
                            <div class="form-group">
                                <label for="file"> Course Cover Image (Optional)</label>
                                <input class="form-control" accept="image/*" type="file" name="image"
                                    placeholder="Image" id="file">

                            </div>

                            <div class="form-group">
                                <!-- <input class="submit" type="submit" value="Upload" /> -->
                                <button class="profile-button" type="submit">Upload</button>
                            </div>
                        </form>



                    </div>
                    <div></div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript"></script>


<?php
    include('../shared_layout/footer.php');
?>