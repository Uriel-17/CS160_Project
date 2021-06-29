<?php
    $title = 'user account page';
    $currentPage = 'account';
    include('header.php');
?>

<section class="profilebody">
    <div class="container">
        <div class="row">
            <div class="profile-nav col-lg-3">
                <?php 
                      include('profile_nav.php')
                ?>
            </div>
            <div class="profile-info col-lg-9">
                <div class="panel">
                    <div class="bio-graph-heading">
                        <h2>User Account</h2>
                        <h3>Edit your account settings here.</h3>
                    </div>
                    <div class="panel-body bio-graph-info">

                        <form action="" method="post">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <label>Current Password</label>
                                </div>
                                <input class="col-sm-6  py-1" placeholder="Enter current password">
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-3">
                                    <label>New Password</label>
                                </div>
                                <input class="col-sm-6 py-1" placeholder="Enter new password">

                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Confirm Password</label>
                                </div>
                                <input class="col-sm-6 py-1" placeholder="Retype new password">
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " href="#">Save</a>
                                </div>
                            </div>
                        </form>
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