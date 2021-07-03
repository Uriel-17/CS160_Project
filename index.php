<?php
if (session_name() == ""){
    session_start();
}
    
    require_once('repo/categoryRepo.php');
    $title = 'Index';  
    include('header.php');
?>

<section class="index py-5">
    <!--container-->
    <div class="container">
        <!--slides-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <h2 class="text-center">Categories</h2>

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
                            echo '<div class="col-3 text-center">
                                    <img src="images/category/'.$cate["image"].'" class="d-block w-100" alt="..." />
                                    <a action="" href="#">'.$cate["categoryname"].'</a>
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
    include('footer.php');
?>