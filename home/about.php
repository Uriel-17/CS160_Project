<?php
if (session_name() == ""){
    session_start();
}
    
require_once('../repo/categoryRepo.php');
$title = 'About';  
include('../shared_layout/header.php');
?>
<section class="about py-5">
    <!--container-->
    <div class="container about-container ">
        <div class="row">
            <div class="col-9 about-us mx-auto text-center">
                <h1>About Us</h1>
                <p>This is our class CS 160 Summer 2021 final project. The team includes Phuoc Le, Uriel Garcia and
                    Carrie Zhang.</p>
            </div>
        </div>
        <div class="row justify-content-between m-3">
            <div class="about-card col-lg-3 col-md-12 m-2">
                <div class="about-card-head">
                    <h3>Uriel Garcia</h3>
                </div>
                <div class="about-card-body">
                    <p> I have developed a couple of projects such as a web app using Javascript, HTML/CSS that searches GitHub users and displays their repositories using the Github API and other web applications that store user info/credentials using PHP and MySQL. </p>
                </div>

            </div>
            <div class="about-card col-lg-3 col-md-12 m-2 ">
                <div class="about-card-head">
                    <h3>Phuoc Le</h3>
                </div>
                <div class="about-card-body">
                    <p>I mostly use ASP.NET, JavaScript, HTML, CSS, and Bootstrap for developing web applications. The database management system I am most familiar with is Microsoft SQL Server, but I can also use MySQL and Oracle.</p>
                </div>

            </div>
            <div class="about-card col-lg-3 col-md-12 m-2">
                <div class="about-card-head">
                    <h3> Carrie Zhang</h3>
                </div>
                <div class="about-card-body">
                    <p>Junior Computer Science major.
                    The languages/technologies I’m familiar with include Java, JavaScript, HTML/CSS. I built a couple of projects such as a clock web using HTML, CSS and Javascript, and a movie app that allows users to search movies on their phone using Java in Visual Studio.
                    </p>
                </div>

            </div>
        </div>



    </div>

</section>

<?php
    include('../shared_layout/footer.php');
?>