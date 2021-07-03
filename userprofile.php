<?php
if (session_name() == ""){
    session_start();
}

$title = 'profile page';

$currentPage = 'userprofile';

include('header.php');
require_once('userProfileBackend.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>

<body>
    <section class="profilebody">
        <div class="container">
            <div class="row">
                <div class="profile-nav col-lg-3">
                    <?php include('profile_nav.php') ?>
                </div>
                <div class="profile-info col-lg-9">
                    <div class="panel">
                        <div class="bio-graph-heading">
                            <h2>Public profile</h2>
                            <h3>The information about yourself</h3>
                        </div>
                        <div class="panel-body bio-graph-info">
                            <div class="row mt-4">
                                <div class="col-sm-3">
                                    <label class="mb-0">Full Name</label>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $fullName; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="mb-0">Email</label>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $email; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="mb-0">Phone</label>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $phone; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="mb-0">Date of Birth</label>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $DOB; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="mb-0">Address</label>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $address; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " href="edit_profile.php">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript"></script>
</body>

</html>
<?php
include('footer.php');
?>