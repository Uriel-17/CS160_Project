<?php
  
    $title = 'course-content page'; 
    $currentPage = 'Course Page';
    include('header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>

<section class="course-body">
    <div class="container">
        <div class="video-content">

            <div class="iframe-container">
                <iframe class="embed-responsive-item"
                    src="https://www.youtube.com/embed/3Kf-FlECN7M?showinfo=0"></iframe>
            </div>

            <div class="video-description">
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
                    <button id='clear'>Cancel</button>
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
<script src="my_js/course.js"></script>


<?php
    include('footer.php');
?>