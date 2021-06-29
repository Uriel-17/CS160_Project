<?php
    $currentPage = 'view_history';
    $title = 'view history page';
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
                        <h2>History</h2>
                        <h3>View the courses you watched</h3>
                    </div>

                    <div class="panel-body uploaded-course">
                        <h1>Viewed courses</h1>
                        <div class="row">
                            <div class="col-md-4 my-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Courrse Name</h5>
                                        <p class="card-text">
                                            Course Description.
                                        </p>
                                        <a href="#" class="btn btn-primary">Continue to watch</a>
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
                                        <a href="#" class="btn btn-primary">Continue to watch</a>
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
                                        <a href="#" class="btn btn-primary">Continue to watch</a>
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
<script type="text/javascript"></script>


<?php
    include('footer.php');
?>