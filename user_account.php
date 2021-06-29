<?php
session_start();
$title = 'user account page';
$currentPage = 'account';
 
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userprofile.css" />
    <title>Document</title>
</head>

<body>

    <body>
        <section class="profilebody">
            <div class="container">
                <div class="row">
                    <div class="profile-nav col-lg-3">
                        <?php include('profile_nav.php')?>
                    </div>
                    <div class="profile-info col-lg-9">
                        <div class="panel">
                            <div class="bio-graph-heading">
                                <h2>User Account</h2>
                                <h3>Edit your account settings here.</h3>
                            </div>

                            <div class="panel-body bio-graph-info">
                                
                                <?php 
                            
                                if(isset($_GET['message'])) {
                                    if($_GET['message'] === 'failed') {
                                        echo 'message: ' . $_GET['message'] . "<br>";

                                        echo '<div>Sorry Try Again</div>'; 
                                        
                                        $_GET['message'] = ''; 

                                        echo 'message: ' . $_GET['message'] . "<br>"; 
                                    } else {

                                        echo '<div>Password Successfully Changed!</div>'; 
                                        // success 
                                        $_GET['message'] = ''; 
                                    }
                                }
                                
                                ?> 
                                <!-- Should be: form action="user_accountBackend.php" method="post -->
                                <form action="user_account.php" method="post">
                                    <div class="row mt-4">
                                        <div class="col-sm-3">
                                            <label>Current Password</label>
                                        </div>
                                        <input class="col-sm-6  py-1" name = "inputPassword" id = "inputPassword" placeholder="Enter current password">
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-3">
                                            <label>New Password</label>
                                        </div>
                                        <input class="col-sm-6 py-1" name = "newPassword" id = "newPassword" placeholder="Enter new password">
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label>Confirm Password</label>
                                        </div>
                                        <input class="col-sm-6 py-1" placeholder="Retype new password">
                                    </div>
                                    <hr>
                                    <div class="row ">
                                        <div class="col-sm-12">
                                            <!-- <a class="btn btn-info " href="#">Save</a> -->
                                            <button class="btn1" id="save" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript"></script>
    </body>

</body>

</html>

<?php
    include('footer.php');

$token = $_SESSION['userId']; 
require_once 'credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 


$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

$passwordDB = getPassword($connection, $userTable, $token); 

changePassword($connection, $userTable, $passwordDB, $token); 



function changePassword($connection, $userTable, $passwordDB, $token) {

  $inputPassword = htmlentities($_POST['inputPassword']); 

  if(password_verify(htmlentities($inputPassword), $passwordDB)) { //input password and db password match

    echo "here"; 

    $newPassword = password_hash(htmlentities($_POST['newPassword']), PASSWORD_DEFAULT); 

    $query = "UPDATE $userTable SET 'password'=$newPassword WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      header('Location: user_account.php?message=success'); 

    }
  } else { // if the input password does not match password from DB
      header('Location: user_account.php?message=failed'); 
     
  }
}



function getPassword($connection, $userTable, $token) {
  
  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error('Something went wrong'); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close

    echo 'Returning passwordDB ' . $row['password'] . '<br>'; 

    return $row['password']; 
  }

}


/**
 * Establishing the connection to the database. If there is no connection the program will
 * terminate. 
 */
function connect_database($servername, $username, $password, $database) {

  $connection = new mysqli($servername, $username, $password, $database);

  if ($connection->connect_error) {

    error("Something went wrong...");

  } else {
    echo "Connection Established..." . "<br>"; 
  }

  return $connection;
}

//This is to be called when there is an error. The program will print
//a message and terminate;
function error($str) {
  die($str); // error message then terminates the program
}

?>