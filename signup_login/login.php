<?php
$title = 'User Login';   
include('../shared_layout/header.php');
?>

<section class="py-5">
    <div class="container py-3">
        <div class="row ">
            <div class="col-lg-9 container">
                <!-- Leave comment-->
                <h3 class="h3 my-4 text-center">Welcome back</h3>
                <?php 
                        if(isset($_SESSION['message'])) {

                            if($_SESSION['message'] === 'username_error') {
                            
                                echo '<div class="text-center" style="color: red;">username is invalid!</div>'; 
                                
                                unset($_SESSION['message']);  

                            }
                            if($_SESSION['message'] === 'password_error') {
                            
                                echo '<div class="text-center" style="color: red;">Wrong password!</div>'; 
                                
                                unset($_SESSION['message']);  

                            }
                        }                   
                   ?>
                <form class="mb-5" action="../userHandler/loginBackend.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center align-items-center">

                        <div class="form-group col-lg-7 ">
                            <input class="form-control my-3 p-2" type="text" name="username" placeholder="Username"
                                required>
                            <input class="form-control my-3 p-2" type="password" name="password" placeholder="******"
                                required>
                            <a href="../user_profile/userprofile.php"><button class="btn3 mt-3 mb-5 "
                                    type="submit">Login</button></a>
                            <a href="../signup_login/register.php" style="color:#3f8858">Register here</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
    include('../shared_layout/footer.php');
?>