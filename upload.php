<?php
  
    $title = 'Edit profile page'; 
    $currentPage = 'edit_profile';
    include('header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userprofile.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
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
                    <div class="panel-upload-body upload-course-info">

                        <form role="form" action="" method="post">
                            <!-- <div class="form-group">
                                <label> Select a Catogory <span class="required">*</span></label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Course
                                            Categories</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect">
                                        <option selected>Choose...</option>
                                        <option value="1">Java</option>
                                        <option value="2">Python</option>
                                        <option value="3">C++</option>
                                        <option value="3">JavaScript</option>
                                        <option value="3">PHP</option>
                                        <option value="3">C</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label>Course Catogory <span class="required">*</span></label>
                                <div class="input-group">
                                    <select class="form-control" id="categories">
                                        <option selected="true" disabled="disabled">Please Select a Category
                                        </option>
                                        <option>Java</option>
                                        <option>C++</option>
                                        <option>Python</option>
                                        <option>JavaScript</option>
                                        <option>Haskell</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Author <span class="required">*</span></label>
                                <input type="text" class="form-control" name="author" id="coursename"
                                    required="required" placeholder="What is the author of this course?">
                            </div>
                            <div class="form-group">
                                <label> Course Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="coursename" id="coursename"
                                    required="required" placeholder="What is the course name?">
                            </div>

                            <div class="form-group">
                                <label> Course Description<span class="required">*</span></label>
                                <textarea name="description" id="description" class="form-control" rows="3"
                                    placeholder="Briefly describe the course."></textarea>
                            </div>
                            <div class="form-group">
                                <label> Course URL<span class="required">*</span></label>
                                <input class="form-control" type="text" name="URL" placeholder="Course URL">

                            </div>
                            <div class="form-group">
                                <label> Course Cover Image (Optional)</label>
                                <input class="form-control" accept="image/*" type="file" name="image"
                                    placeholder="Image">

                            </div>

                            <div class="form-group">
                                <!-- <input class="submit" type="submit" value="Upload" /> -->
                                <button class="uploadBtn" href="upload_course.php" type="submit">Upload</button>
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
    include('footer.php');
?>