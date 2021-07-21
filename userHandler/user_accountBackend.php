<?php
session_start();

$token = $_SESSION['userId']; 
require_once('../server/credentials.php'); //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 


$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

$passwordDB = getPassword($connection, $userTable, $token); 

changePassword($connection, $userTable, $passwordDB, $token); 



function changePassword($connection, $userTable, $passwordDB, $token) {

  $inputPassword = htmlentities($_POST['inputPassword']); 

  if(password_verify(htmlentities($inputPassword), $passwordDB)) { //input password and db password match
    
    //Todo edge case: User new password is the same as current password

    $newPassword = password_hash(htmlentities($_POST['newPassword']), PASSWORD_DEFAULT); 

    $query = "UPDATE $userTable SET password='$newPassword' WHERE userId = $token"; 

    $result = $connection->query($query); 

    if(!$result) {
      
      $result->close(); //close

      error('Something went wrong'); 

    } else {

      $_SESSION['message'] = 'success';

      header('Location: ../user_profile/user_account.php'); 

    }

  } else { // if the input password does not match password from DB
    
    $_SESSION['message'] = 'error'; 
    header('Location: ../user_profile/user_account.php'); 
     
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

  }

  return $connection;
}

//This is to be called when there is an error. The program will print
//a message and terminate;
function error($str) {
  die($str); // error message then terminates the program
}

?>