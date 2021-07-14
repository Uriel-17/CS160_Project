 <?php

$title = 'admin dashboard';
$currentPage = 'dashboard';

include('../shared_layout/header.php');
?>

 <head>
     <link rel="stylesheet" href="../my_css/dashboard.css">
 </head>

 <section class="dashboardbody">
     <div class="container">
         <div class="row">
             <div class="profile-nav col-lg-3">
                 <?php 
                      include('dashboard_nav.php')
                ?>
             </div>
             <div class="profile-info col-lg-9">
                 <div class="panel">
                     <div class="bio-graph-heading">
                         <h2>Public profile</h2>
                         <h3>The information about yourself</h3>
                     </div>
                     <div class="panel-body bio-graph-info text-light">

                         <div class="row mt-4">
                             <div class="col-sm-3">
                                 <label class="mb-0">Full Name</label>
                             </div>
                             <div class="col-sm-9 text-secondary">
                                 Yanqi Zhang
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-sm-3">
                                 <label class="mb-0">Email</label>
                             </div>
                             <div class="col-sm-9 text-secondary">
                                 yanqi.zhang@sjsu.edu
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-sm-3">
                                 <label class="mb-0">Phone</label>
                             </div>
                             <div class="col-sm-9 text-secondary">
                                 (239) 816-9029
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-sm-3">
                                 <label class="mb-0">Date of Birth</label>
                             </div>
                             <div class="col-sm-9 text-secondary">
                                 6/22/2021
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-sm-3">
                                 <label class="mb-0">Address</label>
                             </div>
                             <div class="col-sm-9 text-secondary">
                                 Bay Area, San Francisco, CA
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-sm-12">
                                 <a class="editBtn" href="edit_profile.php">Edit</a>
                             </div>
                         </div>

                     </div>

                 </div>
                 <div></div>
             </div>
         </div>
     </div>

 </section>
 <script type="text/javascript"></script>


 <?php
    include('../shared_layout/footer.php');
?>