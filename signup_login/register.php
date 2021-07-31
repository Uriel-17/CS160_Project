<?php
$title = 'User Registration';
include('../shared_layout/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <section class="py-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-9 container">
                    <!-- Leave comment-->
                    <h3 class="h3 mb-4 text-center">Sign Up Form</h3>

                    <?php 
                        if(isset($_SESSION['message'])) {

                            if($_SESSION['message'] === 'signup_failed') {
                            
                                echo '<div class="text-center" style="color: red;">The username is already taken!</div>'; 
                                
                                unset($_SESSION['message']);  

                            }
                        }                   
                   ?>

                    <form class="form mb-4" id="form" action="../userHandler/registerHandler.php" method="post"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6 ">
                                <input class="form-control mb-2 " type="text" id="username" name="username"
                                    placeholder="Username" required>

                            </div>

                            <div class="form-group col-xs-12 col-md-6 ">
                                <input class="form-control mb-2 " type="text" id="fullname" name="fullname"
                                    placeholder="Fullname" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="password" id="password" name="password"
                                    placeholder="Password" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="password" id="cpw" name="confirmpassword"
                                    placeholder="Confirm password" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="date" name="birthday" title="Date of birth" max=<?php
                         echo date('Y-m-d');
                         ?>>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control bt-3 mb-2" accept="image/*" type="file" name="image"
                                    placeholder="Image">
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="text" id="streetaddress" name="streetaddress"
                                    placeholder="Street address" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="text" id="secondaddress" name="secondaddress"
                                    placeholder="Second address (optional)">
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control mb-2" type="text" id="city" name="city" placeholder="City"
                                    required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control mb-2" type="text" id="state" name="state" placeholder="State"
                                    required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control mb-2" type="text" id="zipcode" name="zipcode"
                                    placeholder="Zipcode" required>
                            </div>

                            <div class="form-group col-xs-6 col-md-3">
                                <input class="form-control mb-2" type="text" id="country" name="country"
                                    placeholder="Country" required>
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="tel" id="phone" name="phone"
                                    placeholder="Phone number">
                            </div>

                            <div class="form-group col-xs-12 col-md-6">
                                <input class="form-control mb-2" type="email" id="email" name="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group col-lg-12 ">
                                <div class="buttons">

                                    <button class="btn1" id="signup" href="index.php" type="submit">Sign
                                        Up</button>
                                    <a href="../home/index.php" style="float:right;" class="btn2 btn remove text-center">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../my_js/signupform.js"></script>

</body>

</html>


<?php
    include('../shared_layout/footer.php');
?>
