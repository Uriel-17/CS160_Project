 <?php
require_once("../repo/ratingRepo.php");
$title = 'admin_ratings';
$currentPage = 'ratings';

include('../shared_layout/header.php');
?>

 <head>
     <link rel="stylesheet" href="../my_css/dashboard.css">

 </head>

 <section class="dashboardbody">
     <div class="container" style="max-width:100%;">
         <div class="row">
             <div class="profile-nav col-lg-2">
                 <?php 
                      include('dashboard_nav.php')
                ?>
             </div>
             <div class="profile-info col-lg-10">
                 <div class="panel">
                     <div class="bio-graph-heading">
                         <h1>Ratings</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div>
                                     <h5>Manage <b>Ratings</b></h5>
                                 </div>
                             </div>
                         </div>
                         <div style="overflow-x:auto;">
                             <table id="example1" class="table table-striped table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="selectAll">
                                                 <label for="selectAll"></label>

                                             </span>
                                         </th>
                                         <th>User Id</th>
                                         <th>Course Id</th>
                                         <th>Ratescore</th>
                                         <th>Create Time</th>
                                         <th>Update Time</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                    $rating_list = getAllRatings();
                                    $i = 1;
                                    if ($rating_list != null && count($rating_list) > 0) {
                                        foreach($rating_list as $rating) {
                                            echo '<tr data-id="'.$rating['userId'].' '.$rating['courseId'].'">
                                                     <td>'.$i++.'</td>
                                                     <td>'.$rating["userId"].'</td>
                                                     <td><a href="../courses/course.php?id='.$rating['courseId'].'">'.$rating["courseId"].'</a></td>
                                                     <td>'.$rating["ratescore"].'</td>
                                                     <td>'.$rating["createtime"].'</td>
                                                     <td>'.$rating["updatetime"].'</td>

                                                     <td>
                                                        <button class="delete btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash" title="Delete"></i>
                                                        </button>
                                                     </td>
                                                 </tr>';
                                        }
                                    }
                                    ?>
                                 </tbody>
                             </table>
                         </div>



                         <!--Delete modal-->
                         <div id="deleteRateModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <div class="modal-header">
                                         <h5 class="modal-title" style="color:black;">Delete Rating
                                         </h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                             aria-hidden="true">&times;
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <h6>Are you sure you want to delete these records?</h6>
                                         <p>This action cannot be undone</p>
                                     </div>
                                     <div class="modal-footer">
                                         <input type="button" id="delete_close" class="btn btn-dafault" data-dismiss="modal"
                                             Value="Cancel">
                                         <input type="button" id="delete_rating" class="btn btn-danger" value="Delete" />
                                     </div>
                                 </div>

                             </div>
                         </div>



                     </div>

                 </div>
                 <div></div>
             </div>
         </div>
     </div>

 </section>


 <script src="../my_js/dashboard.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
 </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
 </script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script defer type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script defer type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
 <script>
    $(document).ready(function () {
        $('#example1').DataTable();

        $('button.delete').on('click', function(e) {
            e.preventDefault();
            var id = $(this).closest('tr').data('id');
            $("#deleteRateModal").data('id', id).modal('show');
        })

        $(".close").click(function() {
            $("#deleteRateModal").modal('toggle');
        })

        $("#delete_close").click(function() {
            $("#deleteRateModal").modal('toggle');
        })
        
        $("#delete_rating").click(function() {
            var id = $("#deleteRateModal").data('id');
            var ids = id.split(" ")
            var userId = ids[0]
            var courseId = ids[1] 
            $.ajax({
            type: "POST",
            url: "/CS160_Project/admin_handler/deleteRating.php",
            data: {
                "userId": userId,
                "courseId": courseId
            },
            success: function(result) {
                $("#deleteRateModal").modal('toggle');
                location.reload()
            },
            failure: function(result) {
                alert(result);
            },
            error: function(result) {
                alert(result);
            }
        })
        })
    });
    </script>


 <?php
    include('../shared_layout/footer.php');
?>