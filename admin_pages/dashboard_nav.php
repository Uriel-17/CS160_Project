<?php
require_once("../repo/userRepo.php");
if (isset($_SESSION["userId"])) {
    $user = getUserById($_SESSION["userId"]);
    $image = "https://bootdey.com/img/Content/avatar/avatar3.png";
    if ($user["profileImage"] != "") {
        $image = "../images/user_img/".$user["profileImage"];
    }
}
else {
    header("Location: ../home/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/dashboard.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!--Data table-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <title>Admin Dashboard</title>
</head>
<style type="text/css">
body {
  font-family: "Roboto", sans-serif;
  background-color: #383838;
  display: flex;
  flex-direction: column; /* creates rows out of the elements main and footer */
  height: 100vh;
  margin: 0;
}
</style>

<body>

    <div class="panel">
        <div class="user-heading round">
            <a href="#">
                <img src="<?php echo $image ?>" alt="dp"
                    style='width:100%;height:100%;' />
            </a>
            <h1>Administrator</h1>
            <p><?php echo $user["fullname"] ?></p>

        </div>

        <ul>
            <li class="<?php echo $currentPage == 'dashboard' ?'active' : ''?>">
                <a href="dashboard.php"> <i class="fas fa-home"></i> Dashboard</a>
            </li>
            <li class="<?php echo $currentPage == 'users' ?'active' : ''?>">
                <a href="users.php"> <i class="fas fa-user-tie"></i> Users</a>
            </li>
            <li class="<?php echo $currentPage == 'categories' ?'active' : ''?>">
                <a href="categories.php"> <i class="fas fa-folder-open"></i> Categories </a>
            </li>

            <li class="<?php echo $currentPage == 'all_courses' ?'active' : ''?>">
                <a href="all_courses.php"> <i class="fas fa-book"></i> Courses </a>
            </li>
            <li class="<?php echo $currentPage == 'comments' ?'active' : ''?>">
                <a href="comments.php"> <i class="far fa-comment"></i> Comments </a>
            </li>
            <li class="<?php echo $currentPage == 'ratings' ?'active' : ''?>">
                <a href="ratings.php"> <i class="far fa-star"></i> Ratings </a>
            </li>
            <li class="<?php echo $currentPage == 'reports' ?'active' : ''?>">
                <a href="reports.php"> <i class="far fa-flag"></i> Reports </a>
            </li>
            <li class="<?php echo $currentPage == 'feedback' ?'active' : ''?>">
                <a href="feedback.php"> <i class="far fa-comment-alt"></i> Feedback </a>
            </li>
        </ul>
    </div>

    
</body>

</html>