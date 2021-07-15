<?php
  
    $title = 'course-content page'; 
    $currentPage = 'Course Page';
    include('../shared_layout/header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/course.css" />


</head>

<section class="course-body">
    <div class="container">
        <div class="video-content">

            <div class="iframe-container">
                <iframe class="embed-responsive-item"
                    src="https://www.youtube.com/embed/3Kf-FlECN7M?showinfo=0"></iframe>
            </div>

            <div class="video-description">
                <div class="container">
                    <div class="row ">

                        <div class=" col-lg-6 text-center">

                        </div>
                        <div class="items col-lg-6">

                            <ul class="buttons">
                                <li>
                                    <span>45 ratings</span> <span class="ratings"><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                </li>
                                <li>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#rate">
                                        Rate
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="rate" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="rate-title" style="color:black;">Rate
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="star-container">

                                                        <div class="star-widget">
                                                            <input type="radio" name="rate" id="rate-5">
                                                            <label for="rate-5" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-4">
                                                            <label for="rate-4" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-3">
                                                            <label for="rate-3" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-2">
                                                            <label for="rate-2" class="fas fa-star"></label>
                                                            <input type="radio" name="rate" id="rate-1">
                                                            <label for="rate-1" class="fas fa-star"></label>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </li>
                                <li> <button type="button" class="btn btn-success">
                                        Save
                                    </button></li>
                                <li> <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#report">
                                        Report
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="report" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="report-title" style="color:black;">
                                                        Report video</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="report-container">

                                                        <div class="report-list">
                                                            <input type="radio" name="report" id="report-1">
                                                            <label for="report-1">Sexual content</label><br />
                                                            <input type="radio" name="report" id="report-2">
                                                            <label for="report-2">Violent or abusive
                                                                content</label><br />
                                                            <input type="radio" name="report" id="report-3">
                                                            <label for="report-3">Hateful or abusive
                                                                content</label><br />
                                                            <input type="radio" name="report" id="report-4">
                                                            <label for="report-4">Harassment of bullying</label><br />
                                                            <input type="radio" name="report" id="report-5">
                                                            <label for="report-5">Spam or misleading</label>

                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 class="m-b-sm">Course Name</h4>

                <p class="m-t-sm">Author</p>
                <h5 class="m-b-sm">Course Description</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, adipisci recusandae. Accusamus
                    libero quos a ad magnam ipsam quibusdam beatae iste officiis? Ea esse sed, veniam omnis a
                    illum quisquam!</p>

            </div>
        </div>
        <div class="comment-box">
            <h4>Comment</h4>
            <form action="" method="post">
                <textarea name="comment" id="comment" cols="45" rows="10" placeholder="Add your comment"></textarea><br>
                <div class="btn">
                    <input type="submit" class="submit" value='Comment' id="new_comment">
                    <button id='clear'>Clear</button>
                </div>
            </form>

        </div>


        <div class="all-comments">
            <h4>All Comments</h4>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>
            <div class="each-comment">
                <h5>username</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque adipisci similique dolorem
                    exercitationem excepturi sequi molestiae quos nihil est, quaerat officiis perferendis quasi
                    dignissimos optio iste quia voluptate vitae ipsum.</p>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination m-2 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</section>
<script src="../my_js/course.js"></script>

<!--need this slim.min.js to make modal work -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>



<?php
    include('../shared_layout/footer.php');
?>