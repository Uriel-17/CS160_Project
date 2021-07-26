 <?php

$title = 'Course';
$currentPage = 'all_courses';

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
                         <h1>Courses</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div class="col-sm-4">
                                     <h5>Manage <b>Courses</b></h5>
                                 </div>
                                 <div class="search-container col-sm-4">
                                     <form action="" method="post">
                                         <input type="text" placeholder="Search.." name="search">
                                         <button type="submit"><i class="fa fa-search"></i></button>
                                     </form>
                                 </div>
                                 <div class="col-sm-4">
                                     <a href="#deleteUserModal" class=" btn btn-danger" data-toggle="modal"><i
                                             class="material-icons">&#xe15c;</i>Delete</a>
                                     <a href="#addUserModal" class=" btn btn-success" data-toggle="modal"><i
                                             class="material-icons">&#xe147;</i>Add New Courses</a>

                                 </div>
                             </div>
                         </div>
                         <div style="overflow-x:auto;">
                             <table class="table table-striped table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="selectAll">
                                                 <label for="selectAll"></label>

                                             </span>
                                         </th>
                                         <th>Course Id</th>
                                         <th>Course Title</th>
                                         <th>Category Id</th>
                                         <th>Description</th>

                                         <th>URL</th>
                                         <th>Image</th>
                                         <th>Create Time</th>
                                         <th>Update Time</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>

                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>

                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>

                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <span class="custom-checkbox">
                                                 <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                                 <label for="checkbox1"></label>
                                             </span>
                                         </td>
                                         <td>1</td>
                                         <td>1</td>
                                         <td>2</td>
                                         <td>description</td>
                                         <td>www.youtube.com</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>7/17/2021</td>
                                         <td>7/17/2021</td>
                                         <td><a href="#editUserModal" class="edit" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Edit">&#xe254;</i></a>
                                             <a href="#deleteUserModal" class="delete" data-toggle="modal"><i
                                                     class="material-icons" data-toggle="tooltip"
                                                     title="Delete">&#xe872;</i></a>
                                         </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>

                         <!--Add modal-->
                         <div id="addUserModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Add Course
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="userId">Course Id</label>
                                                 <input type="text" id="courseId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="userName">Course Title</label>
                                                 <input type="text" id="title" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="fullName">Category Id</label>
                                                 <input type="text" id="categoryId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="dateOfBirth">Description</label>
                                                 <input type="text" id="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="phoneNum">url</label>
                                                 <input type="url" id="url" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="dateOfBirth">Image</label>
                                                 <input type="image" id="image" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="createTime">Create Time</label>
                                                 <input type="text" id="createTime" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="updateTime">Update Time</label>
                                                 <input type="text" id="updateTime" class="form-control" required>
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <input type="button" id="add_user" class="btn btn-success" value="Add" />
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                         <!--Edit modal-->
                         <div id="editUserModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit Course Info
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="userId">Course Id</label>
                                                 <input type="text" id="courseId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="userName">Course Title</label>
                                                 <input type="text" id="title" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="fullName">Category Id</label>
                                                 <input type="text" id="categoryId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="dateOfBirth">Description</label>
                                                 <input type="text" id="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="phoneNum">url</label>
                                                 <input type="url" id="url" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="dateOfBirth">Image</label>
                                                 <input type="image" id="image" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="createTime">Create Time</label>
                                                 <input type="text" id="createTime" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="updateTime">Update Time</label>
                                                 <input type="text" id="updateTime" class="form-control" required>
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <input type="button" id="add_user" class="btn btn-info" value="Save" />
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>


                         <!--Delete modal-->
                         <div id="deleteUserModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <div class="modal-header">
                                         <h5 class="modal-title" style="color:black;">Delete Course
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
                                         <input type="button" class="btn btn-dafault" data-dismiss="modal"
                                             Value="Cancel">
                                         <input type="button" id="add_user" class="btn btn-danger" value="Delete" />
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


 <?php
    include('../shared_layout/footer.php');
?>