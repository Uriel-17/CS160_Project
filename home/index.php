<?php
if (session_name() == ""){
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
<<<<<<< HEAD
            <div class="title col-12">
                <i class="text-left">Categories</i>
                <a class=" text-right">View All</a>
=======
            <div class="col-12">
                <i class="text-left" style="font-size: 1.5rem; color: white;">Categories</i>
                <a class="text-right" href="../courses/course_list.php" style="float:right;">View All</a>
>>>>>>> 3cd00ab318def51292d2831bdf3c1ee7e45ec279
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
<<<<<<< HEAD
                            // echo '<div class="categories col-3 text-center">
                            //         <img src="../images/category/'.$cate["image"].'" class="d-block w-60" alt="..." />
                            //         <a action="" href="#">'.$cate["categoryname"].'</a>
                            //     </div>';
                                echo '<div class="categories col-3 my-1">
                                            <div class="card text-center">
                                               <img class="card-img-top" src="../images/category/'.$cate["image"].'" class="d-block w-40" alt="..." />
                                                <div class="card-body">
                                                    <a action="" href="#">'.$cate["categoryname"].'</a>
                                                    
                                                </div>
                                            </div>
                                        </div>';
=======
                            echo '<div class="col-3 text-center">
                                    <a href="../courses/course_list.php?categoryId='.$cate["categoryId"].'"><img src="../images/category/'.$cate["image"].'" class="d-block w-100" alt="..." /></a>
                                    <a href="../courses/course_list.php?categoryId='.$cate["categoryId"].'">'.$cate["categoryname"].'</a>
                                </div>';
>>>>>>> 3cd00ab318def51292d2831bdf3c1ee7e45ec279
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