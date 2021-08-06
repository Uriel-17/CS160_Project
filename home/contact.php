<?php
if (session_name() == ""){
    session_start();
}
    
require_once('../repo/categoryRepo.php');
$title = 'Contact';  
include('../shared_layout/header.php');
?>
<section class="contact py-5">
    <!--container-->
    <div class="container contact-container ">
        <div class="row">
            <div class="title">
                <h1>Contact Us</h1>
                <p>Any question or remarks? Just write us a message!</p>
            </div>
        </div>

        <div class="row contact-row justify-content-center">
            <div class="contact-card col-md-4 col-sm-12">
                <div class="contact-card-title">
                    <h4>Contact Information</h4>
                    <p>Fill up the form and our Team will gt back to you within 24 hours.</p>
                </div>
                <div class="contact-card-body">
                    <ul>
                        <li><a href="#"><i class="fas fa-phone"></i>+0123 4567 8910</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>hello@codecourses.com</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i>102 Square Str, San Jose, CA</a></li>
                    </ul>
                </div>
                <div class="contact-card-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-form col-md-8 col-sm-12">
                <form action="">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="first-name">First Name</label>
                            <input type="text" class="form-control" id="first-name" placeholder="First name"
                                pattern="[a-zA-Z0-9 ]{4,30}" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="last-name">Last Name</label>
                            <input type="text" class="form-control" id="last-name" placeholder="Last name"
                                pattern="[a-zA-Z0-9 ]{4,30}" required>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="phone-number">Phone Number</label>
                            <input type="text" class="form-control" id="phone-number" placeholder="phone number"
                                pattern="[0-9]{8,12}" title="not valid phone number" required>
                        </div>
                    </div>
                    <div class="row my-3 ">
                        <div class="form-group ">
                            <textarea name="message" class="form-control" id="message" cols="15" rows="3"
                                placeholder="Write your message here."></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary float:right">Submit</button>

                </form>
            </div>
        </div>
    </div>

</section>

<?php
    include('../shared_layout/footer.php');
?>