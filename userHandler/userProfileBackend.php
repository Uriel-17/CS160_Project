<?php
if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
}

$token = $_SESSION['userId']; 
require_once '../server/credentials.php'; //NOTE this is my personal connection to the database. Your credentials.php is going to look different. 


$connection = connect_database($servername, $username, $password, $database); // establishing connection to database

$fullName = getFullName($connection, $userTable, $token);

$email = getEmail($connection, $userTable, $token); 

$phone = getPhone($connection, $userTable, $token); 

$DOB = getDOB($connection, $userTable, $token); 

$address = getAddress($connection, $addressTable, $token);

$image = getImage($connection, $userTable, $token);


function getAddress($connection, $addressTable, $token) {
  
  $query = "SELECT * FROM $addressTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error(); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close

    return $row['streetAddress']; 
  }

}



function getDOB($connection, $userTable, $token) {

  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error('Something went wrong...'); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close

    $DOB = substr($row['dateofbirth'], 0, 11); 

    return $DOB;  
  }

}


function getPhone($connection, $userTable, $token) {
  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error(); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close


    return $row['phonenumber']; 
  }
  

}

function getImage($connection, $userTable, $token) {

  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error(); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close



    return $row['profileImage']; 
  }

}


function getEmail($connection, $userTable, $token) {

  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error(); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close


    return $row['email']; 
  }

}


function getFullName($connection, $userTable, $token) {

  $query = "SELECT * FROM $userTable WHERE userId LIKE '$token'";

  $result = $connection->query($query);   

  if(!$result) {
    
    $result->close(); //close

    error("Something went wrong."); 
  
  } else if($result->num_rows) {

    $row = $result->fetch_assoc(); 

    $result->close(); //close

   // print_r($row); 
   

    return $row['fullname']; 
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
function error($str)
{
  die($str); // error message then terminates the program
}
