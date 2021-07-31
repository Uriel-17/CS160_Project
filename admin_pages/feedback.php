 <?php
require_once("../repo/feedbackRepo.php");
$title = '_admin_feedback';
$currentPage = 'feedback';

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
                         <h1>Feedback</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div>
                                     <h5>Manage <b>Feedback</b></h5>
                                 </div>
                             </div>
                         </div>
                         <div style="overflow-x:auto;">
                             <table id="example1" class="table table-striped table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             No.
                                         </th>
                                         <th>Feedback Id</th>
                                         <th>User Id</th>
                                         <th>Name</th>
                                         <th>Email</th>
                                         <th>Detail</th>
                                         <th>Create Time</th>
                                         <th>Update Time</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                        <?php
                                        $feedback_list = getAllFeedback();
                                        $i = 1;
                                        if ($feedback_list != null && count($feedback_list) > 0) {
                                            foreach($feedback_list as $feedback) {
                                                echo '<tr data-id="'.$feedback['userId'].'">
                                                         <td>'.$i++.'</td>
                                                         <td>'.$feedback["feedbackId"].'</td>
                                                         <td>'.$feedback["userId"].'</td>
                                                         <td>'.$feedback["name"].'</td>
                                                         <td>'.$feedback["email"].'</td>
                                                         <td>'.$feedback["detail"].'</td>
                                                         <td>'.$feedback["createtime"].'</td>
                                                     </tr>';
                                            }
                                        }
                                        ?>
                                 </tbody>
                                 
                             </table>
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
    });
</script>


 <?php
    include('../shared_layout/footer.php');
?>