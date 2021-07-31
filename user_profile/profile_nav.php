<?php
    require_once('../userHandler/userProfileBackend.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../my_css/userprofile.css" />
    <title>Document</title>
</head>


<body>

    <div class="panel">
        <div class="user-heading round ">
            <a href=" #">
                <?php
                    if ($image == null || $image == "") {
                        echo '<img src="https://moonvillageassociation.org/wp-content/uploads/2018/06/default-profile-picture1.jpg" alt="dp" />';
                    }
                    else {
                        echo '<img src="../images/user_img/'.$image.'" alt="dp" />';
                    }
                
                ?>

            </a>
            <h1><?php echo $fullName; ?></h1>
            <p><?php echo $email; ?></p>
            <div class="file">
                <button id="change_photo" style="background: transparent; border: none;">Change Photo</button>
            </div>
        </div>

        <ul>
            <li class="<?php echo $currentPage == 'userprofile' ?'active' : ''?>">
                <a href="userprofile.php"> <i class="fa fa-user"></i> Profile</a>
            </li>
            <li class="<?php echo $currentPage == 'edit_profile' ?'active' : ''?>">
                <a href="edit_profile.php"> <i class="fa fa-edit"></i> Edit profile</a>
            </li>
            <li class="<?php echo $currentPage == 'account' ?'active' : ''?>">
                <a href="user_account.php"> <i class="fa fa-user-circle"></i> Account </a>
            </li>

            <li class="<?php echo $currentPage == 'save_course' ?'active' : ''?>">
                <a href="saved_courses.php"> <i class="fa fa-save"></i> Saved Courses </a>
            </li>
            <li class="<?php echo $currentPage == 'upload_course' ?'active' : ''?>">
                <a href="upload_course.php"> <i class="fa fa-arrow-up"></i> Uploaded Courses </a>
            </li>
            <li class="<?php echo $currentPage == 'view_history' ?'active' : ''?>">
                <a href="view_history.php"> <i class="fa fa-history"></i> View History </a>
            </li>
        </ul>
    </div>

     <!--Edit modal-->
                         <div id="editPhotoModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="../userHandler/change_photo.php" method="post" enctype="multipart/form-data">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit Course Info
                                             </h5>
                                             <button type="button" id="edit_close1" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="image">Profile Image</label>
                                                 <input type="file" id="photo" name="image" accept="image/*" class="form-control">
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" id="edit_close3" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <button type="submit" id="edit_photo" class="btn btn-success">Edit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>

                         <script type="text/javascript">
                            $(document).ready(function () {
                                $('#change_photo').on('click', function(e) {
                                    e.preventDefault();
                                    $("#editPhotoModal").modal('toggle');
                                })

                                $("#edit_close1").click(function() {
                                    $("#editPhotoModal").modal('toggle');
                                })

                                $("#edit_close3").click(function() {
                                    $("#editPhotoModal").modal('toggle');
                                })
                            })
                        </script>
</body>

</html>