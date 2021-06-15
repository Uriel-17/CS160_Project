<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Register</title>
    <style>
    .btn1 {
        border: none;
        outline: none;
        margin-left: 250px;
        height: 50px;
        width: 150px;
        background-color: #00897B;
        color: white;
        border-radius: 4px;
        font-weight: bold;

    }

    .btn2 {
        border: none;
        outline: none;
        margin-left: 150px;
        margin-right: 200px;
        height: 50px;
        width: 150px;
        background-color: #C62828;
        color: white;
        border-radius: 4px;
        font-weight: bold;

    }
    </style>
</head>

<body>
    <?php
    $title = 'User Registration';
    $userId = 1;
    include('header.php');
?>

    <section class="py-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-9 container">
                    <!-- Leave comment-->
                    <h3 class="h3 mb-4 text-center my-4">Sign Up Form</h3>
                    <form class="mb-5" action="registerHandler.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6 ">
                                <input class="form-control mb-2" type="text" name="username" placeholder="Username"
                                    required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control" type="text" name="fullname" placeholder="Fullname" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="password" name="password" placeholder="Password"
                                    required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control" type="password" name="confirmpassword"
                                    placeholder="Confirm password" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="date" name="birthday"
                                    placeholder="Date of birth">
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control bt-3" type="file" name="image" placeholder="Image">
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="text" name="streetaddress"
                                    placeholder="Street address" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control" type="text" name="secondaddress"
                                    placeholder="Second address (optional)">
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control mb-2" type="text" name="city" placeholder="City" required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control" type="text" name="state" placeholder="State" required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control" type="number" name="zipcode" placeholder="Zipcode" required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control" type="text" name="country" placeholder="Country" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="tel" name="phone" placeholder="Phone number">
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>

                            <div class="form-group col-lg-12 ">
                                <a href="userprofile.php"> <button class="btn1" type="submit">Sign
                                        Up</button></a>
                                <a action="index.php" href="index.php"><button class="btn2">Cancel</button></a>
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