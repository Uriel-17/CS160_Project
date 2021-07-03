<?php
session_start(); 
require_once 'credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 

$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

if(authenticateEmail($connection, $userTable)) {

  authenticatePassword($connection, $userTable, htmlentities($_POST['email'])); 

}


function authenticateEmail($connection, $userTable) {

  $email = htmlentities($_POST['email']);

  $query = "SELECT * FROM $userTable WHERE email LIKE '$email'"; 

  $result = $connection->query($query); 

  if(!$result) {

    $result->close();

    $_SESSION['message'] = 'error'; 
    header('Location: login.php'); 
  
  } 

  $result->close();

  return true; 
}


function authenticatePassword($connection, $userTable, $email) {

  $passwordDB = getPassword($connection, $userTable, $email); 
  $inputPassword = htmlentities($_POST['password']);

  if(password_verify($inputPassword, $passwordDB)) { //input password and db password match
    
    header('Location: index.php'); 

  } else { // if the input password does not match password from DB
    
    $_SESSION['message'] = 'error'; 
    header('Location: login.php'); 
     
  }
}

/**
 * Looks inside the database and returns the unique ID of the user
 */
function getUserID($connection, $userTable, $username, $token) {

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
  
  $query = "SELECT * FROM $userTable WHERE email LIKE '$token'";

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