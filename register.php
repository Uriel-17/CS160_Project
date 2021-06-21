<?php
    $title = 'User Registration';
    $userId = 1;
    include('header.php');
?>
<!DOCTYPE>
<html>
<section class="py-4">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-9 container">
                <!-- Leave comment-->
                <h3 class="h3 mb-4 text-center my-4">Sign Up Form</h3>
                <div id="error"></div>
                <form class="form mb-5" id="form" action="registerHandler.php" method="post"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-xs-12 col-md-6 ">
                            <input class="form-control mb-2 " type="text" id="username" name="username"
                                placeholder="Username">

                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control mb-2 " type="text" id="fullname" name="fullname"
                                placeholder="Fullname">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control mb-2" type="password" id="password" name="password"
                                placeholder="Password">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control mb-2" type="password" id="cpw" name="confirmpassword"
                                placeholder="Confirm password">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control mb-2" type="date" name="birthday" placeholder="Date of birth">
                        </div>

                        <div class="form-group col-xs-12 col-md-6">
                            <input class="form-control bt-3 mb-2" type="file" name="image" placeholder="Image">
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
                            <input class="form-control mb-2" type="text" name="zipcode" placeholder="Zipcode" required>
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
                            <input class="form-control mb-2" type="email" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group col-lg-12 ">
                            <div class="buttons">
                                <button class="btn1" type="submit">Sign
                                    Up</button>
                                <a action="index.php" href="index.php" style="float:right;"><button
                                        class="btn2">Cancel</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="js/signupform.js" type="text/javascript"> </script>

</html>
<?php
    include('footer.php');
?>