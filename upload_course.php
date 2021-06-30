<?php

$title = 'upload course page';
$currentPage = 'upload_course';
include('header.php');
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
                            <div class="col-md-4 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Courrse Name</h5>
                                        <p class="card-text">
                                            Course Description.
                                        </p>
                                        <a href="#" class="btn btn-primary">Click to watch</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Courrse Name</h5>
                                        <p class="card-text">
                                            Course Description.
                                        </p>
                                        <a href="#" class="btn btn-primary">Click to watch</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Courrse Name</h5>
                                        <p class="card-text">
                                            Course Description.
                                        </p>
                                        <a href="#" class="btn btn-primary">Click to watch</a>
                                    </div>
                                </div>
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
                        <button class="upload-button btn-secondary">Upload your course</button>
                    </div>
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