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
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="dp" />
            </a>
            <h1>Administrator</h1>
            <p>some@email</p>
            <div class="file">
                <h4>Change Photo</h4>
                <input type="file" name="file" />
            </div>
        </div>

        <ul>
            <li class="<?php echo $currentPage == 'dashboard' ?'active' : ''?>">
                <a href="dashboard.php"> <i class="fa fa-user"></i> Dashboard</a>
            </li>
            <li class="<?php echo $currentPage == 'users' ?'active' : ''?>">
                <a href="users.php"> <i class="fa fa-edit"></i> Users</a>
            </li>
            <li class="<?php echo $currentPage == 'categories' ?'active' : ''?>">
                <a href="categories.php"> <i class="fa fa-user-circle"></i> Categories </a>
            </li>

            <li class="<?php echo $currentPage == 'all_courses' ?'active' : ''?>">
                <a href="all_courses.php"> <i class="fa fa-save"></i> Courses </a>
            </li>
            <li class="<?php echo $currentPage == 'comments' ?'active' : ''?>">
                <a href="comments.php"> <i class="fa fa-arrow-up"></i> Comments </a>
            </li>
            <li class="<?php echo $currentPage == 'ratings' ?'active' : ''?>">
                <a href="ratings.php"> <i class="fa fa-arrow-up"></i> Ratings </a>
            </li>
            <li class="<?php echo $currentPage == 'reports' ?'active' : ''?>">
                <a href="reports.php"> <i class="fa fa-history"></i> Reports </a>
            </li>
            <li class="<?php echo $currentPage == 'feedback' ?'active' : ''?>">
                <a href="feedback.php"> <i class="fa fa-history"></i> Feedback </a>
            </li>
        </ul>
    </div>
</body>

</html>