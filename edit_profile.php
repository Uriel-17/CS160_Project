<?php
  
    $title = 'Edit profile page'; 
    $currentPage = 'edit_profile';
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userprofile.css" />
    <title>Document</title>
</head>

<body>

    <body>
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
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <label>Full Name</label>
                                        </div>
                                        <input class="col-sm-6  py-1" placeholder="Enter full name">
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>Email</label>
                                        </div>
                                        <input class="col-sm-6 py-1" placeholder="Enter new email">

                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Phone</label>
                                        </div>
                                        <input class="col-sm-6 py-1" placeholder="Enter new phone number">
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Date of Birth</label>
                                        </div>
                                        <input class="col-sm-6 py-1" type="date" placeholder="Enter new birthday">
                                    </div>
                                </form>
                                <hr>
                                <form action="" method="post">
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>Address</label>
                                        </div>
                                        <input class="col-sm-6 py-1 " placeholder="Enter new address">

                                    </div>
                                    <hr>

                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>City</label>
                                        </div>
                                        <input class="col-sm-6 py-1 " placeholder="Enter new city">

                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>State</label>
                                        </div>
                                        <input class="col-sm-6 py-1 " placeholder="Enter new state">

                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>Country</label>
                                        </div>
                                        <input class="col-sm-6 py-1 " placeholder="Enter new country">

                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>Zipcode</label>
                                        </div>
                                        <input class="col-sm-6 py-1 " placeholder="Enter new zipcode">

                                    </div>
                                </form>
                                <hr>



                                <div class="row ">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " href="#">Save</a>
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
    </body>

</body>

</html>

<?php
    include('footer.php');
?>