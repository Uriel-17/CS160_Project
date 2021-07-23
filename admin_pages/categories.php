 <?php

$title = '_admin_categories';
$currentPage = 'categories';

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
                         <h2>Categories</h2>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div class="col-sm-4">
                                     <h5>Manage <b>Categories</b></h5>
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
                                             class="material-icons">&#xe147;</i>Add New Category</a>

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
                                         <th>Category Id</th>
                                         <th>Category Name</th>
                                         <th>Description</th>
                                         <th>Image</th>
                                         <th>Priority</th>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                         <td>name</td>
                                         <td>description</td>
                                         <td><img src="H.gif" alt="" border=1 height=100 width=100></img></td>
                                         <td>priority</td>
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
                                             <h5 class="modal-title">Add Category
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="courseId">Course Id</label>
                                                 <input type="text" id="courseId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="courseName">Course Name</label>
                                                 <input type="text" id="courseName" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="description">Course Description</label>
                                                 <input type="text" id="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
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
                                             <h5 class="modal-title">Edit Category Info
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="courseId">Course Id</label>
                                                 <input type="text" id="courseId" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="courseName">Course Name</label>
                                                 <input type="text" id="courseName" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="description">Course Description</label>
                                                 <input type="text" id="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
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
                                         <h5 class="modal-title" style="color:black;">Delete Category
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