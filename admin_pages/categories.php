<?php
require_once("../repo/categoryRepo.php");
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
                         <h1>Categories</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div class="col-sm-6">
                                     <h5>Manage <b>Categories</b></h5>
                                 </div>
                                 <div class="col-sm-6 text-right">
                                     <a href="#addCateModal" class=" btn btn-success" data-toggle="modal"><i
                                             class="material-icons">&#xe147;</i>Add New Category</a>
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
                                    <?php
                                    $cate_list = getAllCategories();
                                    $i = 1;
                                    if ($cate_list != null && count($cate_list) > 0) {
                                        foreach($cate_list as $category) {
                                            $image = $category["image"] == "" ? "default.jpg" : $category["image"];
                                            echo '<tr data-id="'.$category['categoryId'].'">
                                                     <td>'.$i++.'</td>
                                                     <td>'.$category["categoryId"].'</td>
                                                     <td>
                                                        <a href="../courses/course_list.php?categoryId='.$category['categoryId'].'">
                                                            '.$category["categoryname"].'
                                                        </a>
                                                    </td>
                                                     <td>'.$category["description"].'</td>
                                                     <td><img src="../images/category/'.$image.'" alt="" border=1 height=70 width=70></img></td>
                                                     <td>'.$category["priority"].'</td>
                                                     <td>'.$category["createtime"].'</td>
                                                     <td>'.$category["updatetime"].'</td>

                                                     <td>
                                                        <button class="edit btn btn-outline-primary btn-sm">
                                                            <i class="fas fa-pencil-alt" title="Edit"></i>
                                                        </button>
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

                         <!--Add modal-->
                         <div id="addCateModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="../admin_handler/addCate.php" method="post" enctype="multipart/form-data">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Add Category
                                             </h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                             <div class="form-group">
                                                 <label for="categoryname">Category Name</label>
                                                 <input type="text" id="categoryname" name="categoryname" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="description">Category Description</label>
                                                 <input type="text" id="description" name="description" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="priority">Category Priority</label>
                                                 <input type="number" id="priority" name="priority" class="form-control" required>
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
                                                 <input type="file" id="image" name="image" accept="image/*" class="form-control" required>
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <button type="submit" id="add_cate" class="btn btn-success">Add</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>

                         <!--Edit modal-->
                         <div id="editCateModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="../admin_handler/updateCate.php" method="post" enctype="multipart/form-data">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit Category Info
                                             </h5>
                                             <button type="button" id="edit_close" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                            <input type="text" id="edit_id" name="categoryId" class="form-control" required hidden>
                                             <div class="form-group">
                                                 <label for="categoryname">Category Name</label>
                                                 <input type="text" id="categoryname" name="categoryname" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="description">Category Description</label>
                                                 <input type="text" id="description" name="description" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="priority">Category Priority</label>
                                                 <input type="number" id="priority" name="priority" class="form-control">
                                             </div>
                                             <div class="form-group">
                                                 <label for="image">Image</label>
                                                 <input type="file" id="image" name="image" accept="image/*" class="form-control">
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" id="edit_close2" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <button type="submit" id="edit_cate" class="btn btn-success">Edit</button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>


                         <!--Delete modal-->
                         <div id="deleteCateModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <div class="modal-header">
                                         <h5 class="modal-title" style="color:black;">Delete Category
                                         </h5>
                                         <button type="button" id="delete_close2" class="close" data-dismiss="modal" aria-label="close"
                                             aria-hidden="true">&times;
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         <h6>Are you sure you want to delete this category?</h6>
                                         <p>This action cannot be undone</p>
                                     </div>
                                     <div class="modal-footer">
                                         <input type="button" id="delete_close" class="btn btn-dafault" data-dismiss="modal"
                                             Value="Cancel">
                                         <input type="button" id="delete_cate" class="btn btn-danger" value="Delete" />
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
            $("#deleteCateModal").data('id', id).modal('show');
        })

        $("#delete_close").click(function() {
            $("#deleteCateModal").modal('toggle');
        })

        $("#delete_close2").click(function() {
            $("#deleteCateModal").modal('toggle');
        })

        $('button.edit').on('click', function(e) {
            e.preventDefault();
            var id = $(this).closest('tr').data('id');
            $("#edit_id").val(id);
            $("#editCateModal").data('id', id).modal('show');
        })

        $("#edit_close").click(function() {
            $("#editCateModal").modal('toggle');
        })

        $("#edit_close2").click(function() {
            $("#editCateModal").modal('toggle');
        })
        
        $("#delete_cate").click(function() {
            var id = $("#deleteCateModal").data('id');
            $.ajax({
            type: "POST",
            url: "/CS160_Project/admin_handler/deleteCate.php",
            data: {
                "categoryId": id
            },
            success: function(result) {
                $("#deleteCateModal").modal('toggle');
                location.reload();
            },
            failure: function(result) {
                alert(result);
            },
            error: function(result) {
                alert(result);
            }
        })
        })
    })
</script>


 <?php
    include('../shared_layout/footer.php');
?>