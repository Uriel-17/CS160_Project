<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
    <style>
    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
    }

    .btn1:hover {
        background-color: white;
        border: 1px solid;
        color: black;
    }
    </style>
</head>

<body>

    <?php
    $title = 'User Registration';
    $userId = 2;
    include('header.php');
?>

    <section class="py-5">
        <div class="container py-4">
            <div class="row ">
                <div class="col-lg-9 container">
                    <!-- Leave comment-->
                    <h3 class="h4 my-4 pt-4 text-center">Welcome back</h3>
                    <form class="mb-5" action="registerHandler.php" method="post" enctype="multipart/form-data">
                        <div class="row justify-content-center align-items-center">

                            <div class="form-group col-6 ">
                                <input class="form-control my-3 p-4" type="email" name="email"
                                    placeholder="Email Address">
                                <input class="form-control my-3 p-4" type="password" name="password"
                                    placeholder="******" required>
                                <a href="userprofile.php"><button class="btn1 mt-3 mb-5 "
                                        type="submit">Login</button></a>
                                <a href="#">Forgot password?</a>
                                <p>Don't have an account? <a href="register.php">Register here</a></p>
                            </div>




                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
    include('footer.php');
?>