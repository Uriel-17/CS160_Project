<?php
  
    $title = 'course-content page'; 
    $categoryID = $_GET['categoryId'];
    include('../shared_layout/header.php'); 
    //require_once('../repo/categoryRepo.php');
    require_once('../server/credentials.php'); 
    include('./course_listBackend.php');
    
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/course_list.css" />

</head>

<section>
    <div class="container mt-3" style="max-width:100%;">
        <div class="row">
            <div class="categories col-lg-2 text-lg-left">
                <div class="title">
                    <h4>Categories</h4>
                </div>
                <ul>
                    <?php 
                    getCategories($categoryID); 
                    ?>
                </ul>
            </div>
            <div class="all-courses col-lg-8 text-center">
                <div class="row">
                    <div class="col-md-4 mb-2">
                       <?php $cards = getCourses($categoryID)?>
                    </div>
                    
                    <?php printPagination($cards)?>
                </div>
            </div>
            <div class="featured-courses col-lg-2 text-lg-right ">
                <div class="title">
                    <h4>Featured Courses</h4>
                </div>
                <div class="card p-1 mb-3">
                    <div class="d-flex flex-row mb-3">
                        <div class="d-flex flex-column ml-2"><a href="">
                                <img src="https://i.imgur.com/ccMhxvC.png" width="70"><br><span
                                    class="text-black-50">Course
                                    Name</span></a></div>
                    </div>
                </div>
                <div class="card p-1 mb-3">
                    <div class="d-flex flex-row mb-3">
                        <div class="d-flex flex-column ml-2"><a href="">
                                <img src="https://i.imgur.com/ccMhxvC.png" width="70"><br><span
                                    class="text-black-50">Course
                                    Name</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</section>
<script src=""></script>


<?php
    include('../shared_layout/footer.php');
?>