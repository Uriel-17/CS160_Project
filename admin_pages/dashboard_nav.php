<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/dashboard.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Admin Dashboard</title>
</head>


<body>

    <div class="panel">
        <div class="user-heading round">
            <a href="#">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="dp"
                    style='width:100%;height:100%;' />
            </a>
            <h1>Administrator</h1>
            <p>some@email</p>

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