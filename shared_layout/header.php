<?php
require_once("../session/session_ini.php");
require_once("../repo/userRepo.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../my_css/style.css" />
    <title><?php echo $title; ?></title>
</head>

<body>
    <!--header-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light index-forward">
            <div class="
            container
            d-flex
            justify-content-center justify-content-lg-between
            align-items-center">
                <a class="navbar-brand col-lg-2" href="../home/index.php"><img src="../images/logo.png" alt="logo"
                        width="150"></a>
                <form action="../courses/course_list.php" class="col-lg-7 d-md-block d-none" method="get">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" name="key" class="form-control input" placeholder="Search.." />
                        </div>
                        <div class="col-4 text-center">
                            <button class="searchButton" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="buttons col-lg-3 d-block" style="float: right;">

                    <?php
                    if(isset($_SESSION['userId'])){
                        echo '<div class="dropdownbtn">
                                <a class="dropbtn" href="../user_profile/userprofile.php">'.$_SESSION['fullname'].'</a>
                                <div class="dropdown-content">';
                        $user = getUserById($_SESSION['userId']);
                        if ($user != null && $user["accountTypeId"] == '3') {
                            echo '<a href="../admin_pages/dashboard.php">Admin Module</a>';
                        } 
                            
                echo '<a href="../user_profile/edit_profile.php"> Edit Profile</a>
                            <a href="../user_profile/user_account.php">Account</a>
                            <a href="../user_profile/saved_courses.php">Saved Courses</a>
                            <a href="../user_profile/upload_course.php">Uploaded Courses</a>
                            <a href="../user_profile/view_history.php">View History</a>
                            <a href="../signup_login/logout.php">Log Out</a>
                        </div>
                    </div>
                 ';
                }else{                   
                    $sign_up_hidden = '';
                    $sign_in_hidden = '';
                    if($title == 'User Registration'){
                        $sign_up_hidden='hidden';
                    }else if($title == 'User Login'){
                        $sign_in_hidden='hidden';
                    }else {
                        $sign_up_hidden = '';
                        $sign_in_hidden = '';
                    }
                    echo '<li class="list-inline-item"><a href="../signup_login/register.php" '.$sign_up_hidden.'>Sign up</a></li>
                        <li class="list-inline-item"><a href="../signup_login/login.php" '.$sign_in_hidden.'>Login</a></li>';
            }
              
            ?>
                </ul>


            </div>
        </nav>
    </header>

    <!-- JavaScript -->
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous">
                    </script>
                    <script src="../js/bootstrap.min.js"></script>
</body>

</html>