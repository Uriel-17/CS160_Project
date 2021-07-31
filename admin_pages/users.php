 <?php
require_once("../repo/userRepo.php");
$title = 'admin dashboard';
$currentPage = 'users';

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
                         <h1>Users</h1>

                     </div>
                     <div class="table-wrapper text-light">
                         <div class="table-title">
                             <div class="row my-2">
                                 <div>
                                     <h5>Manage <b>Users</b></h5>
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
                                         <th>User Id</th>
                                         <th>Type</th>
                                         <th>User Name</th>
                                         <th>Full Name</th>
                                         <th>Date of Birth</th>
                                         <th>Email</th>
                                         <th>Phone Number</th>
                                         <th>Create Time</th>
                                         <th>Update Time</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                    $user_list = getAllUsers();
                                    $i = 1;
                                    if ($user_list != null && count($user_list) > 0) {
                                        foreach($user_list as $user) {
                                            echo '<tr data-id="'.$user['userId'].'">
                                                     <td>'.$i++.'</td>
                                                     <td>'.$user["userId"].'</td>
                                                     <td>'.$user["accountTypeId"].'</td>
                                                     <td>'.$user["username"].'</td>
                                                     <td>'.$user["fullname"].'</td>
                                                     <td>'.$user["dateofbirth"].'</td>
                                                     <td>'.$user["email"].'</td>
                                                     <td>'.$user["phonenumber"].'</td>
                                                     <td>'.$user["createtime"].'</td>
                                                     <td>'.$user["updatetime"].'</td>

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
                         <!--Edit modal-->
                         <div id="editUserModal" class="modal fade">
                             <div class="modal-dialog">
                                 <div class="modal-content" style="color:black;">
                                     <form action="../admin_handler/updateUser.php" method="post">
                                         <div class="modal-header">
                                             <h5 class="modal-title">Edit User Info
                                             </h5>
                                             <button type="button" id="edit_close2" class="close" data-dismiss="modal" aria-label="close"
                                                 aria-hidden="true">&times;
                                             </button>
                                         </div>
                                         <div class="modal-body">
                                            <input type="text" id="edit_id" name="userId" class="form-control" required hidden>
                                             <div class="form-group">
                                                 <label for="accounttype">Account Type</label>
                                                 <select class="form-control" id="accounttype" name="accounttype">
                                                    <option value="">
                                                        Please Select a Account Type
                                                    </option>
                                                    <option value="1">
                                                        Basic User
                                                    </option>
                                                    <option value="2">
                                                        Content Creator
                                                    </option>
                                                    <option value="3">
                                                        Administrator
                                                    </option>
                                                </select>
                                             </div>
                                             <div class="form-group">
                                                 <label for="updateTime">Password</label>
                                                 <input type="text" id="password" name="password" class="form-control">
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <input type="button" id="edit_close" class="btn btn-dafault" data-dismiss="modal"
                                                 Value="Cancel">
                                             <button type="submit" id="edit_user" class="btn btn-success">Edit</button>
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
                                         <h5 class="modal-title" style="color:black;">Delete User
                                         </h5>
                                         <button type="button" id="delete_close2" class="close" data-dismiss="modal" aria-label="close"
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
                                         <input type="button" id="delete_user" class="btn btn-danger" value="Delete" />
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
            $("#deleteUserModal").data('id', id).modal('show');
        })

        $("#delete_close2").click(function() {
            $("#deleteUserModal").modal('toggle');
        })

        $("#delete_close").click(function() {
            $("#deleteUserModal").modal('toggle');
        })

        $('button.edit').on('click', function(e) {
            e.preventDefault();
            var id = $(this).closest('tr').data('id');
            $("#edit_id").val(id);
            $("#editUserModal").data('id', id).modal('show');
        })

        $("#edit_close").click(function() {
            $("#editUserModal").modal('toggle');
        })

        $("#edit_close2").click(function() {
            $("#editUserModal").modal('toggle');
        })
        
        $("#delete_user").click(function() {
            var id = $("#deleteUserModal").data('id');
            $.ajax({
            type: "POST",
            url: "/CS160_Project/admin_handler/deleteUser.php",
            data: {
                "userId": id
            },
            success: function(result) {
                $("#deleteUserModal").modal('toggle');
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