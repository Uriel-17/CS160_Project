<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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
                <a class="navbar-brand col-lg-2" href="index.php"><img src="~/img/logo.png" alt="logo" width="150"></a>
                <form class="col-lg-8 d-md-block d-none">
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control input" placeholder="Search.." />
                        </div>
                        <div class="col-4 text-center">
                            <button class="searchButton" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <ul class="buttons col-lg-2">

                    <?php
                if(isset($_SESSION['userId'])){
                 echo '
                 <div class="dropdownbtn">
                        <a class="dropbtn" href="userprofile.php">'.$_SESSION['fullname'].'</a>
                        <div class="dropdown-content">
                            <a href="edit_profile.php"> Edit Profile</a>
                            <a href="user_account.php">Account</a>
                            <a href="saved_courses.php">Saved Courses</a>
                            <a href="upload_course.php">Uploaded Courses</a>
                            <a href="view_history.php">View History</a>
                            <a href="index.php">Log Out</a>
                        </div>
                    </div>
                 ';
                }else{                   
                    if(isset($_SESSION['pageId'])){
                        $sign_up_hidden = '';
                        $sign_in_hidden = '';
                        if($_SESSION['pageId'] == 1){
                            $sign_up_hidden='hidden';
                        }else if($_SESSION['pageId'] == 2){
                            $sign_in_hidden='hidden';
                        }else if($_SESSION['pageId'] ==3){
                          $sign_up_hidden = '';
                        $sign_in_hidden = '';
                      
                        }
                        echo '<li class="list-inline-item"><a href="register.php" '.$sign_up_hidden.'>Sign up</a></li>
                        <li class="list-inline-item"><a href="login.php" '.$sign_in_hidden.'>Login</a></li>';
                        
                    }
                    else{
                        echo '<div class="dropdownbtn">
                        <a class="dropbtn" href="userprofile.php">User Name</a>
                        <div class="dropdown-content">
                            <a href="edit_profile.php"> Edit Profile</a>
                            <a href="user_account.php">Account</a>
                            <a href="saved_courses.php">Saved Courses</a>
                            <a href="upload_course.php">Uploaded Courses</a>
                            <a href="view_history.php">View History</a>
                            <a href="index.php">Log Out</a>
                        </div>
                    </div>';
                    }
            }
              
            ?>
                </ul>


            </div>
        </nav>
    </header>

    <!-- JavaScript -->

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>