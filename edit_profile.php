<?php
  
    $title = 'Edit profile page'; 
    $currentPage = 'edit_profile';
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
                        <h2>Edit Profile</h2>
                        <h3>Edit your account settings here.</h3>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <form action="" method="post">
                            <div class="form-group mt-4">
                                <div class="col-sm-3">
                                    <label>Full Name</label>
                                </div>
                                <input class="form-control col-sm-6  py-1" placeholder="Enter full name"
                                    pattern="[a-zA-Z0-9]{1,30}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Email</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" placeholder="Enter new email">

                            </div>

                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Phone</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" placeholder="Enter new phone number">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Date of Birth</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" type="date" placeholder="Enter new birthday">
                            </div>
                            <hr>

                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Address</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new address" ">

                            </div>
                            <hr>

                            <div class=" form-group">
                                <div class=" col-sm-12">
                                    <button class="btn btn-info " type="submit" href="#">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



</section>
<script type="text/javascript"></script>


<?php
    include('footer.php');
?>