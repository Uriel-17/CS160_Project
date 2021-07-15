<?php
  
    $title = 'course-content page'; 
    $currentPage = 'Course Page';
    include('../shared_layout/header.php');
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
                    <li class="<?php echo $currentPage == 'java' ?'active' : ''?>">
                        <a href="#"> <i class="fa fa-java"></i> Java</a>
                    </li>
                    <li class="<?php echo $currentPage == 'python' ?'active' : ''?>">
                        <a href="#" .php"> <i class="fa fa-python"></i> Python</a>
                    </li>
                    <li class="<?php echo $currentPage == 'javascript' ?'active' : ''?>">
                        <a href="#"> <i class="fa fa-javascript"></i> JavaScript </a>
                    </li>

                </ul>
            </div>
            <div class="all-courses col-lg-8 text-center">
                <div class="row">

                    <div class="col-md-4 mb-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">

                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="card p-3">
                            <div class="d-flex flex-row mb-3"><img src="https://i.imgur.com/ccMhxvC.png" width="70">
                                <div class="d-flex flex-column ml-2"><span>Author</span><span
                                        class="text-black-50">Course
                                        Name</span><span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i></span>
                                </div>
                            </div>
                            <h6>Description of the course </h6>
                            <div class="d-flex justify-content-between install mt-3"><span
                                    class="text-primary">View&nbsp;<i class="fa fa-angle-right"></i></span></div>
                        </div>
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