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
                <h3 class="h4 mb-4 text-center">Sign Up Form</h3>
                <form class="mb-5" action="registerHandler.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="text" name="fullname" placeholder="Fullname" required>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="password" name="confirmpassword" placeholder="Confirm password" required>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="date" name="birthday" placeholder="Date of birth">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="file" name="image" placeholder="Image">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="text" name="streetaddress" placeholder="Street address" required>
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="text" name="secondaddress" placeholder="Second address (optional)">
                        </div>

                        <div class="form-group col-xs-6 col-md-3">
                            <input class="form-control" type="text" name="city" placeholder="City" required>
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
                            <input class="form-control" type="tel" name="phone" placeholder="Phone number">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group col-lg-12">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                            <a action="index.php" class="btn btn-danger float-right col-sm-1">Cancel</a>
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