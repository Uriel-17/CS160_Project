<?php
  
    $title = 'Edit profile page'; 
    $currentPage = 'edit_profile';
    include('../shared_layout/header.php');
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
                        <form action="" method="post" class="text-light">
                            <div class="form-group mt-4">
                                <div class="col-sm-3">
                                    <label>Full Name</label>
                                </div>
                                <input class="form-control col-sm-6  py-1" placeholder="Enter full name"
                                    pattern="[a-zA-Z0-9]{4,30}" title="4 - 30 characters please">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Email</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" placeholder="Enter new email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                            </div>

                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Phone</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" placeholder="Enter new phone number"
                                    pattern="[0-9]{8,12}" title="not valid phone number">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Date of Birth</label>
                                </div>
                                <input class="form-control col-sm-6 py-1" type="date" placeholder="Enter new birthday"
                                    title="Date of birth" max=<?php
                         echo date('Y-m-d');
                         ?>>
                            </div>
                            <hr>

                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Address</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new address"
                                    pattern="[a-zA-Z0-9, ]{4,50}">

                            </div>
                            <hr>
                            <div class=" form-group">
                                <div class="col-sm-3">
                                    <label>Second Address</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new second address"
                                    pattern="[a-zA-Z0-9, ]{4,50}">

                            </div>
                            <hr>
                            <div class=" form-group">
                                <div class="col-sm-3">
                                    <label>City</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new city"
                                    pattern="[a-zA-Z, ]{4,20}">

                            </div>

                            <hr>
                            <div class=" form-group">
                                <div class="col-sm-3">
                                    <label>State</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new state"
                                    pattern="[a-zA-Z, ]{4,20}">

                            </div>
                            <hr>
                            <div class=" form-group">
                                <div class="col-sm-3">
                                    <label>Zipcode</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new zipcode"
                                    pattern="[0-9,- ]{4,10}">

                            </div>
                            <hr>
                            <div class=" form-group">
                                <div class="col-sm-3">
                                    <label>Country</label>
                                </div>
                                <input class="form-control col-sm-6 py-1 " placeholder="Enter new country"
                                    pattern="[a-zA-Z ]{4,20}">

                            </div>
                            <hr>

                            <div class=" form-group">
                                <div class=" col-sm-12">
                                    <button class="btn btn-success " type="submit" href="#">Save</button>
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
    include('../shared_layout/footer.php');
?>
