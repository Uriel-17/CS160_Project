<?php
session_start(); 
require_once '../server/credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 

$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

if(authenticateUsername($connection, $userTable)) {

  authenticatePassword($connection, $userTable, htmlentities($_POST['username'])); 

}


function authenticateUsername($connection, $userTable) {

  $username = htmlentities($_POST['username']);

  $query = "SELECT * FROM $userTable WHERE username LIKE '$username'"; 

  $result = $connection->query($query); 

  if(!$result) {

    $_SESSION['message'] = 'username_error'; 
    header('Location: ../signup_login/login.php'); 
  
  } 

  $result->close();

  return true; 
}


function authenticatePassword($connection, $userTable, $username) {

  $passwordDB = getPassword($connection, $userTable, $username); 
  $inputPassword = htmlentities($_POST['password']);

  if(password_verify($inputPassword, $passwordDB)) { //input password and db password match
    $_SESSION['userId'] = $userId = getUserID($connection, $userTable, $username);

    $sql = "SELECT * FROM $userTable WHERE userId = $userId";

    $result = mysqli_query($connection, $sql);

    $user = mysqli_fetch_array($result, 1);

    $_SESSION['fullname'] = $user['fullname'];

    $_SESSION['image'] = $user['image'];

    header('Location: ../home/index.php'); 

  } else { // if the input password does not match password from DB
    
    $_SESSION['message'] = 'password_error'; 
    header('Location: ../signup_login/login.php'); 
     
  }
}

/**
 * Looks inside the database and returns the unique ID of the user
 */
function getUserID($connection, $userTable, $username) {

    $queryID = "SELECT * FROM $userTable WHERE username LIKE '$username'";

    $resultID = $connection->query($queryID);
    
    if (!$resultID) {

        $resultID->close();

        error("Something went wrong!");
    } else if ($resultID->num_rows) {

        $row = $resultID->fetch_assoc();

        $resultID->close(); //close

        return $row["userId"];
    }

    error("something went terribly wrong");
}

function getPassword($connection, $userTable, $token) {
  
  $query = "SELECT * FROM $userTable WHERE username LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error('Something went wrong'); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close

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