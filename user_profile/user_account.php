<?php
    $title = 'user account page';
    $currentPage = 'account';
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
                        <h2>User Account</h2>
                        <h3>Edit your account settings here.</h3>
                    </div>
                    <div class="panel-body bio-graph-info">
                        <?php 
                            
                                if(isset($_SESSION['message'])) {

                                    if($_SESSION['message'] === 'error') {
                                    
                                        echo '<div class="fail-info my-2">Sorry Try Again!</div>'; 
                                        
                                        unset($_SESSION['message']);  

                                    } else {

                                        echo '<div class="success-info my-2">Password Successfully Changed!</div>'; 
                                        // success 
                                        
                                        unset($_SESSION['message']); 
                                    }
                                }
                                
                                ?>

                        <form action="../userHandler/user_accountBackend.php" method="post" class="text-light">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Current Password</label>
                                </div>
                                <input class="col-sm-6 form-control py-1" type="password" name="inputPassword"
                                    id="inputPassword" placeholder="Enter current password">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>New Password</label>
                                </div>
                                <input class="col-sm-6 form-control py-1" type="password" name="newPassword"
                                    id="newPassword" placeholder="Enter new password"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <label>Confirm Password</label>
                                </div>
                                <input class="col-sm-6 form-control py-1" type="password"
                                    placeholder="Retype new password">
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-12">
                                    <button class="profile-button" id="save" type="submit">Save</button>
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
    include('../shared_layout/footer.php');
?>