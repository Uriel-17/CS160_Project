<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userprofile.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
</head>


<body>

    <div class="panel">
        <div class="user-heading round">
            <a href="#">
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
            </a>
            <h1>Carrie Zhang</h1>
            <p>yanqi.zhang@sjsu.edu</p>
            <div class="file">
                <h4>Change Photo</h4>
                <input type="file" name="file" />
            </div>
        </div>

        <ul>
            <li class="active">
                <a href="userprofile.php"> <i class="fa fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="edit_profile.php"> <i class="fa fa-edit"></i> Edit profile</a>
            </li>
            <li>
                <a href="user_account.php"> <i class="fa fa-history"></i> Account </a>
            </li>

            <li>
                <a href="saved_courses.php"> <i class="fa fa-save"></i> Saved Courses </a>
            </li>
            <li>
                <a href="upload_course.php"> <i class="fa fa-arrow-up"></i> Uploaded Courses </a>
            </li>
            <li>
                <a href="view_history.php"> <i class="fa fa-history"></i> View History </a>
            </li>
        </ul>
    </div>
</body>

</html>