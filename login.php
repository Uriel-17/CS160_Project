<?php
session_start();
$_SESSION['pageId'] = 3;
    $title = 'User Login';
   
    include('header.php');
?>

<section class="py-5">
    <div class="container py-3">
        <div class="row ">
            <div class="col-lg-9 container">
                <!-- Leave comment-->
                <h3 class="h3 my-4 text-center">Welcome back</h3>
                <form class="mb-5" action="registerHandler.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center align-items-center">

                        <div class="form-group col-6 ">
                            <input class="form-control my-3 p-3" type="email" name="email" placeholder="Email Address">
                            <input class="form-control my-3 p-3" type="password" name="password" placeholder="******"
                                required>
                            <a href="userprofile.php"><button class="btn3 mt-3 mb-5 " type="submit">Login</button></a>
                            <a href="#">Forgot password?</a>
                            <p>Don't have an account? <a href="register.php">Register here</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    include('footer.php');
?>