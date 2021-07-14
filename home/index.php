<?php
    session_start();
    $_SESSION['pageId'] = 3;
    $title = 'User Registration';  
    include('../shared_layout/header.php');
?>

<section class="index py-5">
    <!--container-->
    <div class="container">
        <!--slides-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <h2 class="title text-center">Categories</h2>

            <div class="carousel-inner">
                <!--slide1-->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-3">
                            <img src="../images/code.jpg" class="d-block w-100" alt="java" />
                        </div>
                        <div class="col-3">
                            <img src="../images/code.jpg" class="d-block w-100" alt="python" />
                        </div>
                        <div class="col-3">
                            <img src="../images/code.jpg" class="d-block w-100" alt="c++" />
                        </div>
                        <div class="col-3">
                            <img src="../images/code.jpg" class="d-block w-100" alt="javascript" />
                        </div>
                    </div>
                </div>
                <!--end of slide 1-->

                <!--slide2-->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/code.jpg" class="d-block w-100" alt="java" />
                        </div>
                        <div class="col-3">
                            <img src="images/code.jpg" class="d-block w-100" alt="python" />
                        </div>
                        <div class="col-3">
                            <img src="images/code.jpg" class="d-block w-100" alt="java" />
                        </div>
                        <div class="col-3">
                            <img src="images/code.jpg" class="d-block w-100" alt="java" />
                        </div>
                    </div>
                </div>
                <!--end of slide 2-->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</section>

<?php
    include('../shared_layout/footer.php');
?>