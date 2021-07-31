<?php
if (session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
    
require_once('../repo/categoryRepo.php');
$title = 'Index';  
include('../shared_layout/header.php');
?>
<section class="index py-5">
    <!--container-->
    <div class="container">
        <!--slides-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="title col-12">
                <i class="text-left">Categories</i>
                <a class=" text-right" href="../courses/course_list.php">View All</a>
            </div>

            <div class="carousel-inner">
                <!--slides-->
                <?php
                $slide_limit = 4;
                $listCate = getAllCategoriesInOrder();
                if ($listCate != null && count($listCate) > 0) {
                    $subCate = array_chunk($listCate, $slide_limit);
                    $count = count($listCate);
                    $slide = ceil($count / $slide_limit);
                    for ($i=0; $i < $slide; $i++) { 
                        if ($i == 0) {
                            echo '<div class="carousel-item active">
                                    <div class="row">';
                        }
                        else{
                            echo '<div class="carousel-item">
                                    <div class="row">';
                        }

                        // code...
                        foreach ($subCate[$i] as $cate) {
                           echo '<div class="categories col-lg-3 col-md-6 col-sm-6 my-1">
                                            <div class="card text-center d-block w-40">
                                               <a action="" href="../courses/course_list.php?categoryId='.$cate["categoryId"].'"><img class="card-img-top" src="../images/category/'.$cate["image"].'" alt="..." /></a>
                                                <div class="card-body">
                                                    <a action="" href="../courses/course_list.php?categoryId='.$cate["categoryId"].'">'.$cate["categoryname"].'</a>
                                                    
                                                </div>
                                            </div>
                                        </div>';
                        }
                        echo '</div>
                    </div>';
                    }
                }
                ?>
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